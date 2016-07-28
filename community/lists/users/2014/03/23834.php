<?
$subject_val = "Re: [OMPI users] Question about &quot;--appfile&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 10:14:05 2014" -->
<!-- isoreceived="20140313141405" -->
<!-- sent="Thu, 13 Mar 2014 07:13:18 -0700" -->
<!-- isosent="20140313141318" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about &amp;quot;--appfile&amp;quot;" -->
<!-- id="4937D23A-8C7F-4D25-8E9F-69D991360036_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAY174-W14137F91CFF7936E4B29D88A710_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about &quot;--appfile&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-13 10:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23833.php">Jianyu Liu: "[OMPI users] Question about &quot;--appfile&quot;"</a>
<li><strong>In reply to:</strong> <a href="23833.php">Jianyu Liu: "[OMPI users] Question about &quot;--appfile&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Huh - well, the man page is definitely wrong. We ignore all other app information on the command line, but not the MCA parameters.
<br>
<p>On Mar 13, 2014, at 6:27 AM, Jianyu Liu &lt;jerry_leo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The man page said all other command line options will be ignored if --appfile used. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So just wondering 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1.  how to specify  &quot;--mca btl ^sm &quot; option while launching MPMD applications with --appfile? 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2. how to know the option &quot;--mca btl ^sm &quot;  worked?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Appreciating your kindly help
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jianyu
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23835.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23833.php">Jianyu Liu: "[OMPI users] Question about &quot;--appfile&quot;"</a>
<li><strong>In reply to:</strong> <a href="23833.php">Jianyu Liu: "[OMPI users] Question about &quot;--appfile&quot;"</a>
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
