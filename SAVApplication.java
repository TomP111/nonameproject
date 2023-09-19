import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.*;

public class SAVApplication {
    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            JFrame frame = new JFrame("Application SAV");
            frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
            frame.setSize(900, 700);

            JPanel panel = new JPanel();
            panel.setLayout(new GridLayout(6, 2));

            JLabel nameLabel = new JLabel("Nom du client:");
            JTextField nameField = new JTextField();

            JLabel prenomLabel = new JLabel("Prénom:");
            JTextField prenomArea = new JTextField();

            JLabel phoneLabel = new JLabel("Téléphone:");
            JTextField phoneArea = new JTextField();

            JLabel issueLabel = new JLabel("Problème:");
            JTextArea issueArea = new JTextArea();


            JButton submitButton = new JButton("Soumettre");
            submitButton.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {
                    String clientName = nameField.getText();
                    String issue = issueArea.getText();
                    String clientPrename = prenomArea.getText();
                    String clientNumber = phoneArea.getText();


                    JOptionPane.showMessageDialog(frame, "Demande soumise avec succès!");
                }
            });

            panel.add(nameLabel);
            panel.add(nameField);
            panel.add(prenomLabel);
            panel.add(prenomArea);
            panel.add(phoneLabel);
            panel.add(phoneArea);
            panel.add(issueLabel);
            panel.add(issueArea);
            panel.add(submitButton);
            panel.add(new JLabel());

            frame.getContentPane().add(panel);
            frame.setVisible(true);
        });
    }
}