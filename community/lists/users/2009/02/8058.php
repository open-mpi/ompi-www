<?
$subject_val = "Re: [OMPI users] MPI_PROC_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 07:39:06 2009" -->
<!-- isoreceived="20090213123906" -->
<!-- sent="Fri, 13 Feb 2009 13:39:01 +0100" -->
<!-- isosent="20090213123901" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_PROC_NULL" -->
<!-- id="9b0da5ce0902130439p4fefd522p126c367326f2b620_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5ACDDE5-133E-4775-9F1C-54CD60485097_at_cisco.com" -->
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
<strong>Date:</strong> 2009-02-13 07:39:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8059.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8057.php">Nicolas Moulin: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>In reply to:</strong> <a href="8050.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8059.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8059.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it was doing no sensible work -
<br>
It was only intended to show the error message.
<br>
<p>I now downloaded the latest nightly tarball and installed it,
<br>
and used your version of the test programm. It works -
<br>
*if* is use the entire path to mpirun:
<br>
<p>&nbsp;[jody_at_localhost 3D]$  /opt/openmpi-1.3.1a0r20534/bin/mpirun -np 2 ./sr
<br>
<p>but if i use the name alone, i get the error:
<br>
<p>[jody_at_localhost 3D]$ mpirun -np 2 ./sr
<br>
[localhost.localdomain:29285] *** An error occurred in MPI_Sendrecv
<br>
[localhost.localdomain:29285] *** on communicator MPI_COMM_WORLD
<br>
[localhost.localdomain:29285] *** MPI_ERR_RANK: invalid rank
<br>
[localhost.localdomain:29285] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[localhost.localdomain:29286] *** An error occurred in MPI_Sendrecv
<br>
[localhost.localdomain:29286] *** on communicator MPI_COMM_WORLD
<br>
[localhost.localdomain:29286] *** MPI_ERR_RANK: invalid rank
<br>
[localhost.localdomain:29286] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>interestingly, it seems to be the same version:
<br>
[jody_at_localhost 3D]$ mpirun --version
<br>
mpirun (Open MPI) 1.3.1a0r20534
<br>
<p>i.e. the version is ok.
<br>
<p>I have my Open-MPI versions installed in directories
<br>
&nbsp;&nbsp;/opt/openmpi-1.xxx
<br>
and create a link
<br>
&nbsp;&nbsp;ln -s /opt/opnmpi-1.xxx /opt/openmpi
<br>
I do it like this so i can easily switch between different version
<br>
<p>Could the diffferent behavour of mpirun and
<br>
/opt/openmpi-1.3.1a0r20534/bin/mpirun
<br>
hab its cause in this setup?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Fri, Feb 13, 2009 at 1:18 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 2:00 PM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my application i use MPI_PROC_NULL
</span><br>
<span class="quotelev2">&gt;&gt; as an argument in MPI_Sendrecv to simplify the
</span><br>
<span class="quotelev2">&gt;&gt; program (i.e. no special cases for borders)
</span><br>
<span class="quotelev2">&gt;&gt; With 1.3 it works, but under 1.3.1a0r20520
</span><br>
<span class="quotelev2">&gt;&gt; i get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_localhost 3D]$ mpirun -np 2 ./sr
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29253] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29253] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29253] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29253] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29252] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29252] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29252] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev2">&gt;&gt; [localhost.localdomain:29252] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your program as written should hang, right?  You're trying to receive from
</span><br>
<span class="quotelev1">&gt; MCW rank 1 and no process is sending.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I slightly modified your code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main() {
</span><br>
<span class="quotelev1">&gt;    int iRank;
</span><br>
<span class="quotelev1">&gt;    int iSize;
</span><br>
<span class="quotelev1">&gt;    MPI_Status st;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;iSize);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;iRank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (1 == iRank) {
</span><br>
<span class="quotelev1">&gt;        MPI_Send(&amp;iSize, 1, MPI_INT, 0, 77, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    } else if (0 == iRank) {
</span><br>
<span class="quotelev1">&gt;        MPI_Sendrecv(&amp;iRank, 1, MPI_INT, MPI_PROC_NULL, 77,
</span><br>
<span class="quotelev1">&gt;                     &amp;iSize, 1, MPI_INT, 1, 77, MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And that works fine for me at the head of the v1.3 branch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [16:17] svbu-mpi:~/svn/ompi-1.3 % svnversion .
</span><br>
<span class="quotelev1">&gt; 20538
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We did have a few bad commits on the v1.3 branch recently; could you try
</span><br>
<span class="quotelev1">&gt; with a tarball from tonight, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8059.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8057.php">Nicolas Moulin: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>In reply to:</strong> <a href="8050.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8059.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8059.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Reply:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
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
