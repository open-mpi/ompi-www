<?
$subject_val = "Re: [OMPI users] Multi-program between Java and C/Fortran...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 14:29:42 2013" -->
<!-- isoreceived="20130723182942" -->
<!-- sent="Tue, 23 Jul 2013 11:29:34 -0700" -->
<!-- isosent="20130723182934" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-program between Java and C/Fortran..." -->
<!-- id="ECE9B527-B9CB-448C-9F93-AA2490450155_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51ED5A3C.4080108_at_engr.colostate.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Multi-program between Java and C/Fortran...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 14:29:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22370.php">Ralph Castain: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>Previous message:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22373.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Reply:</strong> <a href="22373.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There shouldn't be an inter-language issue here as all the Java code does is use a JNI module to access the C bindings. Were you using the Java bindings in the OMPI trunk? Or were you using a 3rd party library?
<br>
<p>On Jul 22, 2013, at 9:13 AM, Andre Dozier &lt;hambre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I never got mpiJava to stop freezing at the MPI calls when trying to talk to a program written in C (most likely because I don't understand mpiJava). So, I wrapped simple openmpi commands (written in C) with Java using JNA that only implemented some simple MPI commands... I am now able to see Java and C talk to each other. I am interested still to hear if anybody has suggestions on how to make a Java program communicate with a C/Fortran program via mpiJava. Regardless, for anybody interested, the code below shows what I got working (make sure jna-4.0.0.jar is in the same folder as these files before you run jumptest.sh):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **IJump.java:
</span><br>
<span class="quotelev1">&gt; import com.sun.jna.Library;
</span><br>
<span class="quotelev1">&gt; import com.sun.jna.Pointer;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public interface IJump extends Library
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    void Init(int argslength, String[] args);
</span><br>
<span class="quotelev1">&gt;    int WorldRank();
</span><br>
<span class="quotelev1">&gt;    int WorldSize();
</span><br>
<span class="quotelev1">&gt;    void Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    void SendInt(int[] buf, int length, int receiver, int tag);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    void RecvInt(int[] buf, int length, int receiver, int tag);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **Jump.java:
</span><br>
<span class="quotelev1">&gt; import com.sun.jna.Native;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public class Jump
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    private static IJump _lib = (IJump) Native.loadLibrary(&quot;jump&quot;, IJump.class);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    public static void main(String args[])
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;    try
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;        _lib.Init(args.length, args);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        int rank = _lib.WorldRank();
</span><br>
<span class="quotelev1">&gt;        int size = _lib.WorldSize();
</span><br>
<span class="quotelev1">&gt;        int sender = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        int offset = 0, cnt = 1;
</span><br>
<span class="quotelev1">&gt;        int[] buf = new int[cnt];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        if (rank == sender)
</span><br>
<span class="quotelev1">&gt;            {
</span><br>
<span class="quotelev1">&gt;            int recvr = 0;
</span><br>
<span class="quotelev1">&gt;            for (int i = 1; i &lt; size; i++)
</span><br>
<span class="quotelev1">&gt;                {
</span><br>
<span class="quotelev1">&gt;                if (recvr == sender)
</span><br>
<span class="quotelev1">&gt;                    recvr++;
</span><br>
<span class="quotelev1">&gt;                buf[0] = recvr;
</span><br>
<span class="quotelev1">&gt;                System.out.print(&quot;Java program is sending &quot; + recvr + &quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;                _lib.SendInt(buf, cnt, recvr, 0);
</span><br>
<span class="quotelev1">&gt;                recvr++;
</span><br>
<span class="quotelev1">&gt;                }
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        else
</span><br>
<span class="quotelev1">&gt;            {
</span><br>
<span class="quotelev1">&gt;            System.out.print(&quot;Java program is waiting at &quot; + rank + &quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;            _lib.RecvInt(buf, cnt, sender, 0);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        System.out.print(&quot;Java program received &quot; + buf[0] + &quot; at &quot; + rank + &quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    catch (Exception e)
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;            e.printStackTrace();
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    finally
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;        try
</span><br>
<span class="quotelev1">&gt;            {
</span><br>
<span class="quotelev1">&gt;            _lib.Finalize();
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        catch(Exception ex)
</span><br>
<span class="quotelev1">&gt;            {
</span><br>
<span class="quotelev1">&gt;            ex.printStackTrace();
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **jump.c:
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void Init(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int WorldRank()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int rank;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  return rank;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int WorldSize()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int size;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  return size;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void Finalize()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void SendInt(int *buf, int length, int receiver, int tag)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Send(buf, length, MPI_INT, receiver, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void RecvInt(int *buf, int length, int receiver, int tag)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Status status;
</span><br>
<span class="quotelev1">&gt;  MPI_Recv(buf, length, MPI_INT, receiver, tag, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **interop.c:
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int rank, size;
</span><br>
<span class="quotelev1">&gt;  int i, bsize;
</span><br>
<span class="quotelev1">&gt;  MPI_Status status;
</span><br>
<span class="quotelev1">&gt;  int scatter = 0;
</span><br>
<span class="quotelev1">&gt;  int sender = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; argc; i++)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      if (strncmp(argv[i], &quot;-scatter&quot;, 8) == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      scatter = 1;
</span><br>
<span class="quotelev1">&gt;      break;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  bsize = 1;
</span><br>
<span class="quotelev1">&gt;  int buf[bsize];
</span><br>
<span class="quotelev1">&gt;  if (scatter)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      int sbuf[size];
</span><br>
<span class="quotelev1">&gt;      if (rank == sender)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;Scattering at %d\n&quot;, sender);
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; size; i++)
</span><br>
<span class="quotelev1">&gt;          sbuf[i] = i;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Waiting at %d\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;      MPI_Scatter(&amp;sbuf, 1, MPI_INT32_T, &amp;buf, 1, MPI_INT32_T, sender, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      if (rank == sender)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      int recvr = 0;
</span><br>
<span class="quotelev1">&gt;      for (i = 1; i &lt; size; i++)
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;          if (recvr == sender)
</span><br>
<span class="quotelev1">&gt;        recvr++;
</span><br>
<span class="quotelev1">&gt;          buf[0] = recvr;
</span><br>
<span class="quotelev1">&gt;          printf(&quot;C program is sending %d\n&quot;, buf[0]);
</span><br>
<span class="quotelev1">&gt;          MPI_Send(&amp;buf, 1, MPI_INT32_T, i, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;          recvr++;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;C program is waiting at %d\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;      MPI_Recv(&amp;buf, 1, MPI_INT32_T, sender, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  printf(&quot;C program received %d at %d\n&quot;, buf[0], rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **java2c.app:
</span><br>
<span class="quotelev1">&gt; -np 1 java -jar ./Jump.jar a e io u r mine
</span><br>
<span class="quotelev1">&gt; -np 3 interop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **c2java.app:
</span><br>
<span class="quotelev1">&gt; -np 1 interop
</span><br>
<span class="quotelev1">&gt; -np 3 java -jar ./Jump.jar a e io u r mine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **Makefile:
</span><br>
<span class="quotelev1">&gt; # Created by: Andre Dozier
</span><br>
<span class="quotelev1">&gt; # Date      : July 16, 2013
</span><br>
<span class="quotelev1">&gt; # Purpose   : Creates two programs to test the legacy model integration tool with various different types of interaction
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CC = mpicc
</span><br>
<span class="quotelev1">&gt; JCC = javac
</span><br>
<span class="quotelev1">&gt; MPIJCC = mpijavac
</span><br>
<span class="quotelev1">&gt; LIB = /usr/local/lib
</span><br>
<span class="quotelev1">&gt; JNA = ./jna-4.0.0.jar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all: interop jump JumpJava
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; interop: interop.c
</span><br>
<span class="quotelev1">&gt;    $(CC) -o interop interop.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jump: jump.c
</span><br>
<span class="quotelev1">&gt;    $(CC) -fPIC -shared -o libjump.so jump.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; JumpJava: Jump.java
</span><br>
<span class="quotelev1">&gt;    $(JCC) -cp .:$(JNA) Jump.java IJump.java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **jumptest.sh:
</span><br>
<span class="quotelev1">&gt; BASEDIR=$(dirname $0)
</span><br>
<span class="quotelev1">&gt; cd $BASEDIR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; echo Finding source files...
</span><br>
<span class="quotelev1">&gt; find -name &quot;*.java&quot; &gt; sources.txt
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; echo Compiling code...
</span><br>
<span class="quotelev1">&gt; make -B
</span><br>
<span class="quotelev1">&gt; jar xf jna-4.0.0.jar
</span><br>
<span class="quotelev1">&gt; # javac -cp $HOME/extras/jna-4.0.0.jar:. @sources.txt
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; echo Packaging code into Jar files...
</span><br>
<span class="quotelev1">&gt; echo Main-Class: Jump &gt; manifest.txt
</span><br>
<span class="quotelev1">&gt; jar cfm Jump.jar manifest.txt IJump.class Jump.class libjump.so com
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; echo Removing temporary files...
</span><br>
<span class="quotelev1">&gt; rm sources.txt manifest.txt
</span><br>
<span class="quotelev1">&gt; rm -rf com META-INF
</span><br>
<span class="quotelev1">&gt; find -name &quot;*.class&quot; | xargs rm -rf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; echo Testing Java to C MPI connection
</span><br>
<span class="quotelev1">&gt; mpirun --app java2c.app
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; echo Testing C to Java MPI connection
</span><br>
<span class="quotelev1">&gt; mpirun --app c2java.app
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andr&#233;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22370.php">Ralph Castain: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>Previous message:</strong> <a href="22368.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22359.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22373.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Reply:</strong> <a href="22373.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
