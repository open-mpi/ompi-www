<?
$subject_val = "Re: [OMPI users] Open Mpi execution error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 11:44:28 2014" -->
<!-- isoreceived="20140407154428" -->
<!-- sent="Sun, 06 Apr 2014 17:45:51 +0200" -->
<!-- isosent="20140406154551" -->
<!-- name="Kamal" -->
<!-- email="infikamal5_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open Mpi execution error" -->
<!-- id="534176AF.6010101_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6D37193D-8440-477B-9D89-F6F2330BED57_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open Mpi execution error<br>
<strong>From:</strong> Kamal (<em>infikamal5_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-06 11:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24079.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24077.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>In reply to:</strong> <a href="24073.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24080.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Reply:</strong> <a href="24080.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I use OMPI 1.8 for Macbook OS X mavericks.
<br>
<p>As you said I will create a new directory to install my MPI files.
<br>
<p>Thanks for your reply,
<br>
<p>Kamal.
<br>
<p>On 07/04/2014 17:37, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; What version of OMPI are you attempting to install?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, using /usr/local as your prefix is a VERY, VERY BAD idea. Most 
</span><br>
<span class="quotelev1">&gt; OS distributions come with a (typically old) version of OMPI installed 
</span><br>
<span class="quotelev1">&gt; in the system area. Overlaying that with another version can easily 
</span><br>
<span class="quotelev1">&gt; lead to the errors you show.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should always install to a user-level directory and then set your 
</span><br>
<span class="quotelev1">&gt; path and ld_library_path to start with that location
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2014, at 8:30 AM, Kamal &lt;infikamal5_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:infikamal5_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Open MPI,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed open-mpi with
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; make all
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then I launched my sample code which gave me this error
</span><br>
<span class="quotelev2">&gt;&gt; my LD_LIBRARY_PATH=/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the output file with this mail
</span><br>
<span class="quotelev2">&gt;&gt; could some one please help me with this .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kamal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;out.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24078/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24079.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24077.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>In reply to:</strong> <a href="24073.php">Ralph Castain: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24080.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Reply:</strong> <a href="24080.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
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
