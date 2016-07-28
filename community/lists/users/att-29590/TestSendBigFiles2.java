import java.util.Random;
import mpi.*;

public class TestSendBigFiles2 {

    public static void log(String msg) {
        try {
            System.err.println(String.format("%2d/%2d:%s", MPI.COMM_WORLD.getRank(), MPI.COMM_WORLD.getSize(), msg));
        } catch (MPIException ex) {
            System.err.println(String.format("%2s/%2s:%s", "?", "?", msg));
        }
    }

    private static int hashcode(byte[] bytearray, int length) {
        if (bytearray == null || 0 == length) {
            return 0;
        }
        int hash = 39;
        for (int i = 0; i < length; i++) {
            byte b = bytearray[i];
            hash = hash * 7 + (int) b;
        }
        return hash;
    }

    private static int hashcode(byte[] bytearray) {
        return hashcode(bytearray, bytearray.length);
    }

    public static void main(String args[]) throws MPIException {
        log("start main");
        MPI.Init(args);
        try {
            log("initialized done");
            byte[] saveMem = new byte[100000000];
            MPI.COMM_WORLD.barrier();
            Random r = new Random();
            r.nextBytes(saveMem);
            if (MPI.COMM_WORLD.getRank() == 0) {
                for (int i = 0; i < 1000; i++) {
                    saveMem[r.nextInt(saveMem.length)]++;
                    log("i = " + i);
                    int hash = hashcode(saveMem);
                    int[] lengthData = new int[]{saveMem.length, hash};
                    log("length = " + lengthData[0]);
                    MPI.COMM_WORLD.bcast(lengthData, 2, MPI.INT, 0);
                    log("bcast length done (length = " + lengthData[0] + ", hash = " + hash + ")");
                    MPI.COMM_WORLD.barrier();
                    MPI.COMM_WORLD.bcast(saveMem, lengthData[0], MPI.BYTE, 0);
                    log("bcast data done");
                    MPI.COMM_WORLD.barrier();
                }
                MPI.COMM_WORLD.bcast(new int[]{0}, 1, MPI.INT, 0);
            } else {
                int[] lengthData = new int[2];
                int hash;
                while (true) {
                    MPI.COMM_WORLD.bcast(lengthData, 2, MPI.INT, 0);
                    // log("bcast length done (length = " + lengthData[0] + ", hash = ", + hash + ")");
                    if (lengthData[0] == 0) {
                        break;
                    }
                    MPI.COMM_WORLD.barrier();
                    MPI.COMM_WORLD.bcast(saveMem, lengthData[0], MPI.BYTE, 0);
                    MPI.COMM_WORLD.barrier();
                    hash = hashcode(saveMem, lengthData[0]);
                    if (hash != lengthData[1]) {
                       log("invalid hash, expected " + lengthData[1] + ", but got " + hash);
                       MPI.COMM_WORLD.abort(1);
                    } else {
                       // log("bcast data done with good hash" + hash);
                    }
                }
            }
            MPI.COMM_WORLD.barrier();
        } catch (MPIException ex) {
            System.out.println("caugth error." + ex);
            log(ex.getMessage());
        } catch (RuntimeException ex) {
            System.out.println("caugth error." + ex);
            log(ex.getMessage());
        } finally {
            MPI.Finalize();
        }

    }

} 

