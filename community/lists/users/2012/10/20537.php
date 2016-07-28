<?
$subject_val = "Re: [OMPI users] running openmpi in debug/verbose mode";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 14:51:57 2012" -->
<!-- isoreceived="20121025185157" -->
<!-- sent="Thu, 25 Oct 2012 11:51:52 -0700 (PDT)" -->
<!-- isosent="20121025185152" -->
<!-- name="Mahmood Naderan" -->
<!-- email="nt_mahmood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi in debug/verbose mode" -->
<!-- id="1351191112.79588.YahooMailNeo_at_web111717.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E116AB63-D9B0-4C98-9B05-5BE703F69C1A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] running openmpi in debug/verbose mode<br>
<strong>From:</strong> Mahmood Naderan (<em>nt_mahmood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 14:51:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20538.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Previous message:</strong> <a href="20536.php">Ralph Castain: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<li><strong>In reply to:</strong> <a href="20536.php">Ralph Castain: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20549.php">Jeff Squyres: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<li><strong>Reply:</strong> <a href="20549.php">Jeff Squyres: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I sent a problem to the list but didn't receive any reply. In short, we found 

that when we run openmpi+openfoam program on a node (in a diskless cluster), 

there is a huge IO operations caused by openmpi. When we run openmpi+openfoam
on the server, there is no problem. When we run openfoam directly on the node,
there is also no problem.

Now I am looking for some verbose/debug outputs from openmpi which 

shows the activity of it (in particular IO messages for example opening file1

or closing file2...).

Can I extract such messages?

&#160;
Regards,
Mahmood



________________________________
 From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Mahmood Naderan &lt;nt_mahmood_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Thursday, October 25, 2012 8:44 PM
Subject: Re: [OMPI users] running openmpi in debug/verbose mode
 

There is a *ton* of debug output available - would help to know what you are attempting to debug



On Oct 25, 2012, at 11:38 AM, Mahmood Naderan &lt;nt_mahmood_at_[hidden]&gt; wrote:


&gt;
&gt;Dear all,
&gt;Is there any way to run openmpi in debug or verbose mode? Is there any log for openmpi run?
&gt;&#160;
&gt;Regards,
&gt;Mahmood
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20537/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20538.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Previous message:</strong> <a href="20536.php">Ralph Castain: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<li><strong>In reply to:</strong> <a href="20536.php">Ralph Castain: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20549.php">Jeff Squyres: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<li><strong>Reply:</strong> <a href="20549.php">Jeff Squyres: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
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
