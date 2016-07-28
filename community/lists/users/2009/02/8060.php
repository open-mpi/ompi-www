<?
$subject_val = "Re: [OMPI users] MPI_PROC_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 07:55:04 2009" -->
<!-- isoreceived="20090213125504" -->
<!-- sent="Fri, 13 Feb 2009 13:54:59 +0100" -->
<!-- isosent="20090213125459" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_PROC_NULL" -->
<!-- id="9b0da5ce0902130454u4fbb9202i58e2c6b441f68100_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0902130439p4fefd522p126c367326f2b620_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-13 07:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8061.php">Jeff Squyres: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Previous message:</strong> <a href="8059.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8062.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8062.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Forgot to add.
<br>
i have /opt/openmpi/bin in my $PATH
<br>
<p>I tried around some more and found that it
<br>
also works without errors if use
<br>
&nbsp;/opt/openmpi/bin/mpirun -np 2 ./sr
<br>
<p>I don't understand this,  because 'mpirun' alone should be the same thing:
<br>
[jody_at_localhost 3D]$ which mpirun
<br>
/opt/openmpi/bin/mpirun
<br>
<p>Thank You for an explanation
<br>
<p>&nbsp;&nbsp;Jody
<br>
<p>On Fri, Feb 13, 2009 at 1:39 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Yes, it was doing no sensible work -
</span><br>
<span class="quotelev1">&gt; It was only intended to show the error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I now downloaded the latest nightly tarball and installed it,
</span><br>
<span class="quotelev1">&gt; and used your version of the test programm. It works -
</span><br>
<span class="quotelev1">&gt; *if* is use the entire path to mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [jody_at_localhost 3D]$  /opt/openmpi-1.3.1a0r20534/bin/mpirun -np 2 ./sr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but if i use the name alone, i get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jody_at_localhost 3D]$ mpirun -np 2 ./sr
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29285] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29285] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29285] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29285] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29286] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29286] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29286] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:29286] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; interestingly, it seems to be the same version:
</span><br>
<span class="quotelev1">&gt; [jody_at_localhost 3D]$ mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.3.1a0r20534
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i.e. the version is ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have my Open-MPI versions installed in directories
</span><br>
<span class="quotelev1">&gt;  /opt/openmpi-1.xxx
</span><br>
<span class="quotelev1">&gt; and create a link
</span><br>
<span class="quotelev1">&gt;  ln -s /opt/opnmpi-1.xxx /opt/openmpi
</span><br>
<span class="quotelev1">&gt; I do it like this so i can easily switch between different version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could the diffferent behavour of mpirun and
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.3.1a0r20534/bin/mpirun
</span><br>
<span class="quotelev1">&gt; hab its cause in this setup?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 13, 2009 at 1:18 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 12, 2009, at 2:00 PM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my application i use MPI_PROC_NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as an argument in MPI_Sendrecv to simplify the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program (i.e. no special cases for borders)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With 1.3 it works, but under 1.3.1a0r20520
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jody_at_localhost 3D]$ mpirun -np 2 ./sr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:29253] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:29253] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:29253] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:29253] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:29252] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:29252] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:29252] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:29252] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your program as written should hang, right?  You're trying to receive from
</span><br>
<span class="quotelev2">&gt;&gt; MCW rank 1 and no process is sending.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I slightly modified your code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main() {
</span><br>
<span class="quotelev2">&gt;&gt;    int iRank;
</span><br>
<span class="quotelev2">&gt;&gt;    int iSize;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Status st;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;iSize);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;iRank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if (1 == iRank) {
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Send(&amp;iSize, 1, MPI_INT, 0, 77, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;    } else if (0 == iRank) {
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Sendrecv(&amp;iRank, 1, MPI_INT, MPI_PROC_NULL, 77,
</span><br>
<span class="quotelev2">&gt;&gt;                     &amp;iSize, 1, MPI_INT, 1, 77, MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;    return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And that works fine for me at the head of the v1.3 branch:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [16:17] svbu-mpi:~/svn/ompi-1.3 % svnversion .
</span><br>
<span class="quotelev2">&gt;&gt; 20538
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We did have a few bad commits on the v1.3 branch recently; could you try
</span><br>
<span class="quotelev2">&gt;&gt; with a tarball from tonight, perchance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8061.php">Jeff Squyres: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Previous message:</strong> <a href="8059.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8062.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8062.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
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
