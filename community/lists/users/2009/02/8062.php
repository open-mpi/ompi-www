<?
$subject_val = "Re: [OMPI users] MPI_PROC_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 08:12:04 2009" -->
<!-- isoreceived="20090213131204" -->
<!-- sent="Fri, 13 Feb 2009 14:11:58 +0100" -->
<!-- isosent="20090213131158" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_PROC_NULL" -->
<!-- id="9b0da5ce0902130511r4727e8f4s6a55789f74e783c3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0902130454u4fbb9202i58e2c6b441f68100_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_PROC_NULL<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 08:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8061.php">Jeff Squyres: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>In reply to:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well all i do seems to verify that only one version is running:
<br>
<p>[jody_at_localhost 3D]$ ls -ld /opt/openmp*
<br>
lrwxrwxrwx 1 root root   26 2009-02-13 14:09 /opt/openmpi -&gt;
<br>
/opt/openmpi-1.3.1a0r20534
<br>
drwxr-xr-x 7 root root 4096 2009-02-12 22:19 /opt/openmpi-1.3.1a0r20432
<br>
drwxr-xr-x 7 root root 4096 2009-02-12 21:58 /opt/openmpi-1.3.1a0r20520
<br>
drwxr-xr-x 7 root root 4096 2009-02-13 13:46 /opt/openmpi-1.3.1a0r20534
<br>
drwxr-xr-x 7 root root 4096 2009-02-12 22:41 /opt/openmpi-1.4a1r20525
<br>
[jody_at_localhost 3D]$ echo $PATH
<br>
/opt/openmpi/bin:/opt/jdk/jdk1.6.0_07/bin:/opt/jdk/jdk1.6.0_07/bin:/opt/jdk/jdk1.6.0_07/bin:/usr/kerberos/bin:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/jody/bin:/home/jody/utils
<br>
[jody_at_localhost 3D]$ which mpirun
<br>
/opt/openmpi/bin/mpirun
<br>
[jody_at_localhost 3D]$ mpirun --version
<br>
mpirun (Open MPI) 1.3.1a0r20534
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
[jody_at_localhost 3D]$ /opt/openmpi-1.3.1a0r20534/bin/mpirun --version
<br>
mpirun (Open MPI) 1.3.1a0r20534
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
[jody_at_localhost 3D]$
<br>
<p>BTW the same strange misbehaviour happen with the other versions
<br>
<p>Jody
<br>
<p><p>On Fri, Feb 13, 2009 at 1:54 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Forgot to add.
</span><br>
<span class="quotelev1">&gt; i have /opt/openmpi/bin in my $PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried around some more and found that it
</span><br>
<span class="quotelev1">&gt; also works without errors if use
</span><br>
<span class="quotelev1">&gt;  /opt/openmpi/bin/mpirun -np 2 ./sr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand this,  because 'mpirun' alone should be the same thing:
</span><br>
<span class="quotelev1">&gt; [jody_at_localhost 3D]$ which mpirun
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You for an explanation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 13, 2009 at 1:39 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it was doing no sensible work -
</span><br>
<span class="quotelev2">&gt;&gt; It was only intended to show the error message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I now downloaded the latest nightly tarball and installed it,
</span><br>
<span class="quotelev2">&gt;&gt; and used your version of the test programm. It works -
</span><br>
<span class="quotelev2">&gt;&gt; *if* is use the entire path to mpirun:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  [jody_at_localhost 3D]$  /opt/openmpi-1.3.1a0r20534/bin/mpirun -np 2 ./sr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but if i use the name alone, i get the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_localhost 3D]$ mpirun -np 2 ./sr
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29285] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29285] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29285] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29285] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29286] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29286] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29286] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29286] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; interestingly, it seems to be the same version:
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_localhost 3D]$ mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.3.1a0r20534
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i.e. the version is ok.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have my Open-MPI versions installed in directories
</span><br>
<span class="quotelev2">&gt;&gt;  /opt/openmpi-1.xxx
</span><br>
<span class="quotelev2">&gt;&gt; and create a link
</span><br>
<span class="quotelev2">&gt;&gt;  ln -s /opt/opnmpi-1.xxx /opt/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; I do it like this so i can easily switch between different version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could the diffferent behavour of mpirun and
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.3.1a0r20534/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; hab its cause in this setup?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;  Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 13, 2009 at 1:18 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 12, 2009, at 2:00 PM, jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my application i use MPI_PROC_NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as an argument in MPI_Sendrecv to simplify the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program (i.e. no special cases for borders)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With 1.3 it works, but under 1.3.1a0r20520
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i get the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [jody_at_localhost 3D]$ mpirun -np 2 ./sr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29253] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29253] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29253] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29253] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29252] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29252] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29252] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29252] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your program as written should hang, right?  You're trying to receive from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCW rank 1 and no process is sending.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I slightly modified your code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main() {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int iRank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int iSize;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Status st;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;iSize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;iRank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (1 == iRank) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Send(&amp;iSize, 1, MPI_INT, 0, 77, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    } else if (0 == iRank) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Sendrecv(&amp;iRank, 1, MPI_INT, MPI_PROC_NULL, 77,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     &amp;iSize, 1, MPI_INT, 1, 77, MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And that works fine for me at the head of the v1.3 branch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [16:17] svbu-mpi:~/svn/ompi-1.3 % svnversion .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 20538
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We did have a few bad commits on the v1.3 branch recently; could you try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a tarball from tonight, perchance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8061.php">Jeff Squyres: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>In reply to:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
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
