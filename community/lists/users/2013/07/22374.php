<?
$subject_val = "Re: [OMPI users] Multi-program between Java and C/Fortran...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 15:20:53 2013" -->
<!-- isoreceived="20130723192053" -->
<!-- sent="Tue, 23 Jul 2013 12:20:46 -0700" -->
<!-- isosent="20130723192046" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-program between Java and C/Fortran..." -->
<!-- id="3B41BA7D-7126-46BF-8413-90774361AAB7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51EED516.7080607_at_engr.colostate.edu" -->
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
<strong>Date:</strong> 2013-07-23 15:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22375.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22373.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>In reply to:</strong> <a href="22373.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2013, at 12:10 PM, Andre Dozier &lt;hambre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was using the OMPI trunk version 1.9a1r28764...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried building openmpi both with and without GC_DOES_PINNING defined, because I noticed that the MPI calls are handled differently with that defined (although I may not have defined it in the correct place.... ompi/mpi/java/c/mpiJava.h). Without it defined, it looks like the data is packed to a byte array before sending, and then, unpack on the receiving side. So, I thought that I would have to do the same thing in the C program I built. Am I correct in assuming that I would have to pack data into a byte array (or unpack it) in my C program without GC_DOES_PINNING defined when building openmpi? When I built it with GC_DOES_PINNING, nothing noticeably changed.
</span><br>
<p>Aahhhh....yeah, that's a good point. The Java side assumes it's another Java program on the other end, so it does do some data handling under the covers. Required due to the mismatch between Java and the way MPI handles things.
<br>
<p>Hadn't thought about that - I suspect your approach might be required. Some folks are reworking the java bindings on-the-side and will be committing it shortly, so it could be that they will consider this problem.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andr&#233;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/23/2013 12:29 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There shouldn't be an inter-language issue here as all the Java code does is use a JNI module to access the C bindings. Were you using the Java bindings in the OMPI trunk? Or were you using a 3rd party library?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 22, 2013, at 9:13 AM, Andre Dozier &lt;hambre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I never got mpiJava to stop freezing at the MPI calls when trying to talk to a program written in C (most likely because I don't understand mpiJava). So, I wrapped simple openmpi commands (written in C) with Java using JNA that only implemented some simple MPI commands... I am now able to see Java and C talk to each other. I am interested still to hear if anybody has suggestions on how to make a Java program communicate with a C/Fortran program via mpiJava. Regardless, for anybody interested, the code below shows what I got working (make sure jna-4.0.0.jar is in the same folder as these files before you run jumptest.sh):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **IJump.java:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; import com.sun.jna.Library;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; import com.sun.jna.Pointer;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; public interface IJump extends Library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void Init(int argslength, String[] args);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int WorldRank();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int WorldSize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void SendInt(int[] buf, int length, int receiver, int tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    void RecvInt(int[] buf, int length, int receiver, int tag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **Jump.java:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; import com.sun.jna.Native;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; public class Jump
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    private static IJump _lib = (IJump) Native.loadLibrary(&quot;jump&quot;, IJump.class);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    public static void main(String args[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        _lib.Init(args.length, args);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        int rank = _lib.WorldRank();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        int size = _lib.WorldSize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        int sender = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        int offset = 0, cnt = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        int[] buf = new int[cnt];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if (rank == sender)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            int recvr = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            for (int i = 1; i &lt; size; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                if (recvr == sender)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    recvr++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                buf[0] = recvr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                System.out.print(&quot;Java program is sending &quot; + recvr + &quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                _lib.SendInt(buf, cnt, recvr, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                recvr++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            System.out.print(&quot;Java program is waiting at &quot; + rank + &quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            _lib.RecvInt(buf, cnt, sender, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        System.out.print(&quot;Java program received &quot; + buf[0] + &quot; at &quot; + rank + &quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    catch (Exception e)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            e.printStackTrace();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    finally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            _lib.Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        catch(Exception ex)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ex.printStackTrace();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **jump.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void Init(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int WorldRank()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int WorldSize()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void Finalize()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void SendInt(int *buf, int length, int receiver, int tag)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Send(buf, length, MPI_INT, receiver, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void RecvInt(int *buf, int length, int receiver, int tag)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Recv(buf, length, MPI_INT, receiver, tag, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **interop.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int rank, size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int i, bsize;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int scatter = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int sender = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  for (i = 0; i &lt; argc; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (strncmp(argv[i], &quot;-scatter&quot;, 8) == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      scatter = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  bsize = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int buf[bsize];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if (scatter)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int sbuf[size];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (rank == sender)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      printf(&quot;Scattering at %d\n&quot;, sender);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      for (i = 0; i &lt; size; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          sbuf[i] = i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;Waiting at %d\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Scatter(&amp;sbuf, 1, MPI_INT32_T, &amp;buf, 1, MPI_INT32_T, sender, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (rank == sender)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int recvr = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      for (i = 1; i &lt; size; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          if (recvr == sender)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        recvr++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          buf[0] = recvr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;C program is sending %d\n&quot;, buf[0]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Send(&amp;buf, 1, MPI_INT32_T, i, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          recvr++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      printf(&quot;C program is waiting at %d\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Recv(&amp;buf, 1, MPI_INT32_T, sender, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;C program received %d at %d\n&quot;, buf[0], rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **java2c.app:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 java -jar ./Jump.jar a e io u r mine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 3 interop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **c2java.app:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 1 interop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 3 java -jar ./Jump.jar a e io u r mine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **Makefile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Created by: Andre Dozier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Date      : July 16, 2013
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Purpose   : Creates two programs to test the legacy model integration tool with various different types of interaction
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC = mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; JCC = javac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPIJCC = mpijavac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LIB = /usr/local/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; JNA = ./jna-4.0.0.jar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all: interop jump JumpJava
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interop: interop.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $(CC) -o interop interop.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jump: jump.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $(CC) -fPIC -shared -o libjump.so jump.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; JumpJava: Jump.java
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $(JCC) -cp .:$(JNA) Jump.java IJump.java
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **jumptest.sh:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BASEDIR=$(dirname $0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd $BASEDIR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo Finding source files...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find -name &quot;*.java&quot; &gt; sources.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo Compiling code...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make -B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jar xf jna-4.0.0.jar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # javac -cp $HOME/extras/jna-4.0.0.jar:. @sources.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo Packaging code into Jar files...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo Main-Class: Jump &gt; manifest.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jar cfm Jump.jar manifest.txt IJump.class Jump.class libjump.so com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo Removing temporary files...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm sources.txt manifest.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -rf com META-INF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find -name &quot;*.class&quot; | xargs rm -rf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo Testing Java to C MPI connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --app java2c.app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo Testing C to Java MPI connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --app c2java.app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andr&#233;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22375.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22373.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>In reply to:</strong> <a href="22373.php">Andre Dozier: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- nextthread="start" -->
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
