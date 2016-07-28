import mpi.MPI;
import mpi.MPIException;

public class LibPath {
    public static void main(String[] args) throws MPIException {
        MPI.Init(args);
        String libPath = System.getProperty("java.library.path");
        System.out.println(libPath);
        MPI.Finalize();
    }
}
