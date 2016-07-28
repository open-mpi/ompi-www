import mpi.*;
import java.nio.*;
import static mpi.MPI.slice;

public class DerivedData
{
private static class MyStruct extends Struct
{
    private static final int MAX_LENGTH = 30;

    // This section defines the offsets of the fields.
    private int key    = addInt(),
                length = addInt(), // value length
                value  = addChar(MAX_LENGTH);

    // This method tells the super class how to create a data object.
    @Override protected Data newData()
    {
        return new Data();
    }

    // A Data object is a reference to a buffer section.
    // It permits read (puts) and write (gets) on the buffer
    private class Data extends Struct.Data
    {
        public int getKey()
        {
            return getInt(key);
        }

        public void putKey(int k)
        {
            putInt(key, k);
        }

        public String getValue()
        {
            int len = getInt(length); // Gets the value length.
            StringBuilder sb = new StringBuilder(len);

            // Deserialization
            for(int i = 0; i < len; i++)
                sb.append(getChar(value, i));

            return sb.toString();
        }

        public void putValue(String d)
        {
            int len = d.length();

            if(len > MAX_LENGTH)
                throw new AssertionError("Max length exceeded!");

            putInt(length, len); // Puts the value length on the buffer.

            // Serialization
            for(int i = 0; i < len; i++)
                putChar(value, i, d.charAt(i));
        }
    } // Data
} // MyStruct

public static void main(String args[]) throws MPIException
{
    MPI.Init(args);
    MPI.COMM_WORLD.setErrhandler(MPI.ERRORS_RETURN);
    int rank = MPI.COMM_WORLD.getRank();
    int size = MPI.COMM_WORLD.getSize();

    if(size != 3)
        throw new MPIException("I need 3 processes.");

    MyStruct myStruct = new MyStruct();

    if(rank == 0)
    {
        int length = 4;
        ByteBuffer buf = MPI.newByteBuffer(myStruct.getExtent() * length);
        System.out.println("Process 0:");

        for(int i = 0; i < length; i++)
        {
            MyStruct.Data d = myStruct.getData(buf, i);
            d.putKey(i);
            d.putValue("Value "+ i);
            System.out.println(d.getKey() +" : "+ d.getValue());
        }

        MPI.COMM_WORLD.send(buf, 2, myStruct.getType(), 1, 0);
        int off = 2 * myStruct.getExtent();
        MPI.COMM_WORLD.send(slice(buf, off), 2, myStruct.getType(), 2, 0);
    }
    else
    {
        int length = 2;
        ByteBuffer buf = MPI.newByteBuffer(myStruct.getExtent() * length);
        MPI.COMM_WORLD.recv(buf, length, myStruct.getType(), 0, 0);

        StringBuilder sb = new StringBuilder();
        sb.append("Process "+ rank +":\n");

        for(int i = 0; i < length; i++)
        {
            MyStruct.Data d = myStruct.getData(buf, i);
            sb.append(d.getKey() +" : "+ d.getValue() +"\n");
        }

        System.out.print(sb);
    }

    MPI.Finalize();
}

} // DerivedData

