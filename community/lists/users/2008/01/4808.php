<?
$subject_val = "Re: [OMPI users] Open MPI v1.2.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 19:53:53 2008" -->
<!-- isoreceived="20080111005353" -->
<!-- sent="Fri, 11 Jan 2008 09:53:43 +0900" -->
<!-- isosent="20080111005343" -->
<!-- name="8mj6tc902_at_[hidden]" -->
<!-- email="8mj6tc902_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI v1.2.5 released" -->
<!-- id="19453-64378_at_sneakemail.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="mailman.25.1199984425.5165.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI v1.2.5 released<br>
<strong>From:</strong> <a href="mailto:8mj6tc902_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Open%20MPI%20v1.2.5%20released"><em>8mj6tc902_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-01-10 19:53:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>Previous message:</strong> <a href="4807.php">Jeff Squyres: "Re: [OMPI users] openib problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="4794.php">Tim Mattox: "[OMPI users] Open MPI v1.2.5 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Warner. The simplest way would certainly be to launch your job with
<br>
with the mpirun --nolocal option. If you're sure you want a
<br>
hostfile-based way to set this, simply removing the headnode from the
<br>
hostfile would also work.
<br>
<p><pre>
-- 
--Kris
叶ってしまう瘢雹夢は本当の夢と言えん。
[A dream that comes true can't really be called a dream.]
Warner Yuen &lt;wyuen_at_[hidden]&gt; wrote
&gt; Date: Wed, 9 Jan 2008 12:50:09 -0800
&gt; From: Warner Yuen &lt;wyuen_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] Open MPI v1.2.5 released
&gt; To: users_at_[hidden]
&gt; Message-ID: &lt;C524E178-912C-461B-A864-19454C31EBC3_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
&gt;
&gt; Thanks to Brian Barrett, I was able to get through some ugly Intel
&gt; compiler bugs during the configure script. I now have OMPI v1.2.5
&gt; running nicely under Mac OSX v10.5 Leopard!
&gt;
&gt; However, I have a question about hostfiles. I would like to manually
&gt; launch MPI jobs from my headnode, but I don't want the jobs to run on
&gt; the head node. In LAM/MPI I could add a &quot;hostname schedule=no&quot; to the
&gt; hostfile, is there an equivalent in OpenMPI? I'm sure this has come up
&gt; before, but I couldn't find an answer in the archives.
&gt;
&gt; Thanks,
&gt;
&gt; -Warner
&gt;
&gt; Warner Yuen
&gt; Scientific Computing Consultant
&gt; Apple Computer
&gt; email: wyuen_at_[hidden]
&gt; Tel: 408.718.2859
&gt; Fax: 408.715.0133
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<li><strong>Previous message:</strong> <a href="4807.php">Jeff Squyres: "Re: [OMPI users] openib problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="4794.php">Tim Mattox: "[OMPI users] Open MPI v1.2.5 released"</a>
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
