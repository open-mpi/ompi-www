<?
$subject_val = "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 12:51:11 2013" -->
<!-- isoreceived="20131107175111" -->
<!-- sent="Thu, 7 Nov 2013 11:45:05 -0600" -->
<!-- isosent="20131107174505" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem" -->
<!-- id="3259180251469388543_at_unknownmsgid" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6B82A8ECEE3FB3408374DEC3361DBF5F3E48CE633E_at_w92expo5.exchange.mit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 12:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22923.php">Gus Correa: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Previous message:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>In reply to:</strong> <a href="22920.php">Steven G Johnson: "[OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Reply:</strong> <a href="22943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a relatively old version of OMPI.  Maybe try the latest
<br>
release? That's always the safe bet since the issue might have been
<br>
fixed already.
<br>
<p>I recall that OMPI uses ROMIO so you might try to reproduce with MPICH
<br>
so you can report it to the people that wrote the MPI-IO code. Of
<br>
course, this might not be an issue with ROMIO itself.  Trying with
<br>
MPICH is a good way to verify that.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>Sent from my iPhone
<br>
<p>On Nov 7, 2013, at 10:55 AM, Steven G Johnson &lt;stevenj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The simple C program attached below hangs on MPI_File_write when I am using an NFS-mounted filesystem.   Is MPI-IO supported in OpenMPI for NFS filesystems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.4.5 on Debian stable (wheezy), 64-bit Opteron CPU, Linux 3.2.51.   I was surprised by this because the problems only started occurring recently when I upgraded my Debian system to wheezy; with OpenMPI in the previous Debian release, output to NFS-mounted filesystems worked fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any easy way to get this working?  Any tips are appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Steven G. Johnson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void perr(const char *label, int err)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    char s[MPI_MAX_ERROR_STRING];
</span><br>
<span class="quotelev1">&gt;    int len;
</span><br>
<span class="quotelev1">&gt;    MPI_Error_string(err, s, &amp;len);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;%s: %d = %s\n&quot;, label, err, s);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_File fh;
</span><br>
<span class="quotelev1">&gt;    int err;
</span><br>
<span class="quotelev1">&gt;    err = MPI_File_open(MPI_COMM_WORLD, &quot;tstmpiio.dat&quot;, MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev1">&gt;    perr(&quot;open&quot;, err);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    const char s[] = &quot;Hello world!\n&quot;;
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;    err = MPI_File_write(fh, (void*) s, strlen(s), MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev1">&gt;    perr(&quot;write&quot;, err);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    err = MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt;    perr(&quot;close&quot;, err);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="22923.php">Gus Correa: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Previous message:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>In reply to:</strong> <a href="22920.php">Steven G Johnson: "[OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Reply:</strong> <a href="22943.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
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
