<?
$subject_val = "[OMPI users] Fwd: Re: Re: Sorry! You were supposed to get help about: But	couldn't open help-orterun.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 06:41:52 2011" -->
<!-- isoreceived="20110601104152" -->
<!-- sent="Wed, 01 Jun 2011 12:42:30 +0200" -->
<!-- isosent="20110601104230" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: Re: Re: Sorry! You were supposed to get help about: But	couldn't open help-orterun.txt" -->
<!-- id="4DE61796.2000800_at_hlrs.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: Re: Re: Sorry! You were supposed to get help about: But	couldn't open help-orterun.txt<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-01 06:42:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16666.php">Bhargava Ramu Kavati: "[OMPI users] Regarding OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16664.php">Fr&#195;&#169;d&#195;&#169;ric Feyel: "[OMPI users] Problem with MPI_Intercomm_create"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to send reply, but it seems the email never got delivered. Don't 
<br>
know why :-( . sorry about that. Let me just try again.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>-------- Original Message --------
<br>
Subject: 	Re: Re: [OMPI users] Sorry! You were supposed to get help 
<br>
about: But couldn't open help-orterun.txt
<br>
Date: 	Wed, 11 May 2011 17:26:04 +0200 (CEST)
<br>
From: 	Shiqing Fan &lt;hpcfan_at_[hidden]&gt;
<br>
To: 	Open MPI Users &lt;users_at_[hidden]&gt;
<br>
CC: 	hi &lt;hiralsmaillist_at_[hidden]&gt;
<br>
<p><p><p>Hi,
<br>
<p>The error message means that Open MPI couldn't allocate any compute node. It might because the headnode wasn't discovered. You could try with option &quot;-mca orte_headnode_name HEADNODE_NAME&quot; in the mpirun command line (mpirun --help will show how to use it) .
<br>
<p>And Jeff is also right, special care should be taken for the executable paths, and it's better to use UNC path.
<br>
<p>To clarify the path issue, if you just copy the OMPI dir to another computer, there might also be another problem that OMPI couldn't load the registry entries, as the registry entries were set during the installation phase on the specific computer. In 1.5.3, a overall env &quot;OPENMPI_HOME&quot; will do the work.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p>----- &#229;&#142;&#159;&#229;&#167;&#139;&#233;&#130;&#174;&#228;&#187;&#182; -----
<br>
&#229;&#143;&#145;&#228;&#187;&#182;&#228;&#186;&#186;: Jeff Squyres&lt;jsquyres_at_[hidden]&gt;
<br>
&#230;&#148;&#182;&#228;&#187;&#182;&#228;&#186;&#186;: Open MPI Users&lt;users_at_[hidden]&gt;
<br>
&#229;&#183;&#178;&#229;&#143;&#145;&#233;&#128;&#129;&#233;&#130;&#174;&#228;&#187;&#182;: Wed, 11 May 2011 15:21:26 +0200 (CEST)
<br>
&#228;&#184;&#187;&#233;&#162;&#152;: Re: [OMPI users] Sorry! You were supposed to get help about: But	couldn't open help-orterun.txt
<br>
<p>On May 11, 2011, at 5:50 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt;  Clarification: I installed pre-built OpenMPI_v1.5.3-x64 on Windows 7
</span><br>
<span class="quotelev2">&gt;&gt;  and copied this directory into Windows Server 2008.
</span><br>
<p>Did you copy OMPI to the same directory tree that you built it?
<br>
<p>OMPI hard-codes some directory names when it builds, and it expects to find that directory structure when it runs.  If you build OMPI with a --prefix of /foo, but then move it to /bar, various things may not work (like finding help messages, etc.) unless you set the OMPI/OPAL environment variables that tell OMPI where the files are actually located.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16665/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16666.php">Bhargava Ramu Kavati: "[OMPI users] Regarding OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16664.php">Fr&#195;&#169;d&#195;&#169;ric Feyel: "[OMPI users] Problem with MPI_Intercomm_create"</a>
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
