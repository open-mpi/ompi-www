<?
$subject_val = "Re: [OMPI users] Multi-program between Java and C/Fortran...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 22 12:13:54 2013" -->
<!-- isoreceived="20130722161354" -->
<!-- sent="Mon, 22 Jul 2013 10:13:48 -0600" -->
<!-- isosent="20130722161348" -->
<!-- name="Andre Dozier" -->
<!-- email="hambre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-program between Java and C/Fortran..." -->
<!-- id="51ED5A3C.4080108_at_engr.colostate.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51E796C5.5070001_at_engr.colostate.edu" -->
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
<strong>From:</strong> Andre Dozier (<em>hambre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-22 12:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22328.php">Andre Dozier: "[OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22369.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Reply:</strong> <a href="22369.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I never got mpiJava to stop freezing at the MPI calls when trying to 
<br>
talk to a program written in C (most likely because I don't understand 
<br>
mpiJava). So, I wrapped simple openmpi commands (written in C) with Java 
<br>
using JNA that only implemented some simple MPI commands... I am now 
<br>
able to see Java and C talk to each other. I am interested still to hear 
<br>
if anybody has suggestions on how to make a Java program communicate 
<br>
with a C/Fortran program via mpiJava. Regardless, for anybody 
<br>
interested, the code below shows what I got working (make sure 
<br>
jna-4.0.0.jar is in the same folder as these files before you run 
<br>
jumptest.sh):
<br>
<p><p>**IJump.java:
<br>
import com.sun.jna.Library;
<br>
import com.sun.jna.Pointer;
<br>
<p>public interface IJump extends Library
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void Init(int argslength, String[] args);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int WorldRank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int WorldSize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void SendInt(int[] buf, int length, int receiver, int tag);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void RecvInt(int[] buf, int length, int receiver, int tag);
<br>
}
<br>
<p><p>**Jump.java:
<br>
import com.sun.jna.Native;
<br>
<p>public class Jump
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;private static IJump _lib = (IJump) Native.loadLibrary(&quot;jump&quot;, 
<br>
IJump.class);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String args[])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_lib.Init(args.length, args);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank = _lib.WorldRank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size = _lib.WorldSize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int sender = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int offset = 0, cnt = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int[] buf = new int[cnt];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == sender)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int recvr = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 1; i &lt; size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (recvr == sender)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvr++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf[0] = recvr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print(&quot;Java program is sending &quot; + recvr + 
<br>
&quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_lib.SendInt(buf, cnt, recvr, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvr++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print(&quot;Java program is waiting at &quot; + rank + &quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_lib.RecvInt(buf, cnt, sender, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print(&quot;Java program received &quot; + buf[0] + &quot; at &quot; + 
<br>
rank + &quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch (Exception e)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e.printStackTrace();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;finally
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_lib.Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch(Exception ex)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ex.printStackTrace();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p><p>**jump.c:
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;string.h&gt;
<br>
<p>void Init(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
}
<br>
<p>int WorldRank()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;return rank;
<br>
}
<br>
<p>int WorldSize()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;return size;
<br>
}
<br>
<p>void Finalize()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>void SendInt(int *buf, int length, int receiver, int tag)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(buf, length, MPI_INT, receiver, tag, MPI_COMM_WORLD);
<br>
}
<br>
<p>void RecvInt(int *buf, int length, int receiver, int tag)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv(buf, length, MPI_INT, receiver, tag, MPI_COMM_WORLD, &amp;status);
<br>
}
<br>
<p><p>**interop.c:
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;string.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;&nbsp;int i, bsize;
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;int scatter = 0;
<br>
&nbsp;&nbsp;&nbsp;int sender = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; argc; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (strncmp(argv[i], &quot;-scatter&quot;, 8) == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scatter = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;bsize = 1;
<br>
&nbsp;&nbsp;&nbsp;int buf[bsize];
<br>
&nbsp;&nbsp;&nbsp;if (scatter)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int sbuf[size];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == sender)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Scattering at %d\n&quot;, sender);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sbuf[i] = i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Waiting at %d\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Scatter(&amp;sbuf, 1, MPI_INT32_T, &amp;buf, 1, MPI_INT32_T, sender, 
<br>
MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == sender)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int recvr = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 1; i &lt; size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (recvr == sender)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvr++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf[0] = recvr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;C program is sending %d\n&quot;, buf[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;buf, 1, MPI_INT32_T, i, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvr++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;C program is waiting at %d\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;buf, 1, MPI_INT32_T, sender, 0, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;C program received %d at %d\n&quot;, buf[0], rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>**java2c.app:
<br>
-np 1 java -jar ./Jump.jar a e io u r mine
<br>
-np 3 interop
<br>
<p><p>**c2java.app:
<br>
-np 1 interop
<br>
-np 3 java -jar ./Jump.jar a e io u r mine
<br>
<p><p>**Makefile:
<br>
# Created by: Andre Dozier
<br>
# Date      : July 16, 2013
<br>
# Purpose   : Creates two programs to test the legacy model integration 
<br>
tool with various different types of interaction
<br>
#
<br>
<p>CC = mpicc
<br>
JCC = javac
<br>
MPIJCC = mpijavac
<br>
LIB = /usr/local/lib
<br>
JNA = ./jna-4.0.0.jar
<br>
<p>all: interop jump JumpJava
<br>
<p>interop: interop.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(CC) -o interop interop.c
<br>
<p>jump: jump.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(CC) -fPIC -shared -o libjump.so jump.c
<br>
<p>JumpJava: Jump.java
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(JCC) -cp .:$(JNA) Jump.java IJump.java
<br>
<p><p>**jumptest.sh:
<br>
BASEDIR=$(dirname $0)
<br>
cd $BASEDIR
<br>
<p>echo
<br>
echo Finding source files...
<br>
find -name &quot;*.java&quot; &gt; sources.txt
<br>
echo
<br>
echo Compiling code...
<br>
make -B
<br>
jar xf jna-4.0.0.jar
<br>
# javac -cp $HOME/extras/jna-4.0.0.jar:. @sources.txt
<br>
echo
<br>
echo Packaging code into Jar files...
<br>
echo Main-Class: Jump &gt; manifest.txt
<br>
jar cfm Jump.jar manifest.txt IJump.class Jump.class libjump.so com
<br>
echo
<br>
echo Removing temporary files...
<br>
rm sources.txt manifest.txt
<br>
rm -rf com META-INF
<br>
find -name &quot;*.class&quot; | xargs rm -rf
<br>
<p>echo
<br>
echo Testing Java to C MPI connection
<br>
mpirun --app java2c.app
<br>
echo
<br>
echo Testing C to Java MPI connection
<br>
mpirun --app c2java.app
<br>
echo
<br>
<p><p><p>Andr&#233;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22328.php">Andre Dozier: "[OMPI users] Multi-program between Java and C/Fortran..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22369.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
<li><strong>Reply:</strong> <a href="22369.php">Ralph Castain: "Re: [OMPI users] Multi-program between Java and C/Fortran..."</a>
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
