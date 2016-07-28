import mpi.*;
import java.nio.*;

public class MinlocTester
{
public static void main(String[] args) throws MPIException
{
    MPI.Init(args);
    int me = MPI.COMM_WORLD.getRank();

    // Create an array with 5 random integers in INT2 contiguous format
    int count = 5;
    ByteBuffer in = MPI.newByteBuffer(count * MPI.INT2.getExtent());

    for(int i = 0; i < count; i++)
    {
        Int2.Data d = MPI.int2.getData(in, i);
        d.putValue((int)(Math.random() * count * 10));
        d.putIndex(me);
    }

    // Print my array
    System.out.println("rank: " + me + " " + toString(in, count));

    // Create an array to receive min values and locations in INT2 format
    ByteBuffer out = MPI.newByteBuffer(count * MPI.INT2.getExtent());
    MPI.COMM_WORLD.reduce(in, out, count, MPI.INT2, MPI.MINLOC, 0);

    if(me == 0)
    {
        // Print received array on root
        System.out.println("rank: " + me + " out " + toString(out, count));
    }

    MPI.Finalize();
}

private static String toString(ByteBuffer buf, int count) throws MPIException
{
    StringBuilder sb = new StringBuilder();
    
    for(int i = 0; i < count; i++)
    {
        Int2.Data d = MPI.int2.getData(buf, i);
        sb.append("("+ d.getValue() +","+ d.getIndex() +") ");
    }

    return sb.toString();
}

} // MinlocTester2
