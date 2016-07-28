<?
$subject_val = "Re: [OMPI users] Open Mpi execution error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 11:37:50 2014" -->
<!-- isoreceived="20140407153750" -->
<!-- sent="Mon, 7 Apr 2014 08:37:18 -0700" -->
<!-- isosent="20140407153718" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open Mpi execution error" -->
<!-- id="6D37193D-8440-477B-9D89-F6F2330BED57_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="534172FA.60900_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 11:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24074.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24072.php">Kamal: "[OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24072.php">Kamal: "[OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Reply:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OMPI are you attempting to install?
<br>
<p>Also, using /usr/local as your prefix is a VERY, VERY BAD idea. Most OS distributions come with a (typically old) version of OMPI installed in the system area. Overlaying that with another version can easily lead to the errors you show.
<br>
<p>You should always install to a user-level directory and then set your path and ld_library_path to start with that location
<br>
<p><p>On Apr 6, 2014, at 8:30 AM, Kamal &lt;infikamal5_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Open MPI,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed open-mpi with 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev1">&gt; make all 
</span><br>
<span class="quotelev1">&gt; make install 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then I launched my sample code which gave me this error 
</span><br>
<span class="quotelev1">&gt; my LD_LIBRARY_PATH=/usr/local/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the output file with this mail 
</span><br>
<span class="quotelev1">&gt; could some one please help me with this . 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kamal 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;out.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24074.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24072.php">Kamal: "[OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24072.php">Kamal: "[OMPI users] Open Mpi execution error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Reply:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
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
