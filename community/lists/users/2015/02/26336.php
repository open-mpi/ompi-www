<?
$subject_val = "Re: [OMPI users] mpirun error on MAC OSX 10.6.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 11:41:50 2015" -->
<!-- isoreceived="20150217164150" -->
<!-- sent="Tue, 17 Feb 2015 08:41:46 -0800" -->
<!-- isosent="20150217164146" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error on MAC OSX 10.6.8" -->
<!-- id="962A86FB-9EFE-4778-A224-DB1B92A69376_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+aTLtLWHD4RN2BOCi-hVZqEpZ3no5O5j6UTsn0OA_a=Uf4Umw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error on MAC OSX 10.6.8<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-17 11:41:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26337.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26335.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun error on MAC OSX 10.6.8"</a>
<li><strong>In reply to:</strong> <a href="26334.php">Tarandeep Kalra: "Re: [OMPI users] mpirun error on MAC OSX 10.6.8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe 10.6 goes back well before 2011, but that&#146;s beside the point - just haven&#146;t heard someone running that old a version of OSX. I doubt that 1.8.4 supports it, or that homebrew built it and tested it on something that old (I know we don&#146;t).
<br>
<p>Only thing I can suggest is perhaps getting your own tarball and trying to build it yourself and see if that works. Ensure you have &#151;enable-debug on the configure line so you can turn on diagnostics if you hit a problem.
<br>
<p><p><span class="quotelev1">&gt; On Feb 17, 2015, at 8:36 AM, Tarandeep Kalra &lt;tarankalra_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is a 2011 Macbook pro. Depends on what you think is old.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Taran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 17, 2015 at 11:21 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; OSX 10.6.8?? Are you sure? That is incredibly old - I haven&#146;t seen such a system in quite some time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 17, 2015, at 8:04 AM, Tarandeep Kalra &lt;tarankalra_at_[hidden] &lt;mailto:tarankalra_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello friends, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using mpi for the first time on my MAC OSX (10.6.8). The MPI that I installed is Open MPI. I have installed it through homebrew. It is installed as I can autocomplete mpi--- commands from my terminal. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When i run mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt; It returns to 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.8.4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, when I am using the mpirun command to run a basic code like to print hello with 2 cores. It does not show any error message and nothing is displayed after the command is run. To simplify the problem I tried &quot;mpirun uname&quot; to check if even 1 core responds. This also does not respond.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for helping me on this.
</span><br>
<span class="quotelev2">&gt;&gt; Taran
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26332.php">http://www.open-mpi.org/community/lists/users/2015/02/26332.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26332.php">http://www.open-mpi.org/community/lists/users/2015/02/26332.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26333.php">http://www.open-mpi.org/community/lists/users/2015/02/26333.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26333.php">http://www.open-mpi.org/community/lists/users/2015/02/26333.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26334.php">http://www.open-mpi.org/community/lists/users/2015/02/26334.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26336/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26337.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26335.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun error on MAC OSX 10.6.8"</a>
<li><strong>In reply to:</strong> <a href="26334.php">Tarandeep Kalra: "Re: [OMPI users] mpirun error on MAC OSX 10.6.8"</a>
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
