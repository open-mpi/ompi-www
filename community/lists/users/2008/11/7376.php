<?
$subject_val = "Re: [OMPI users] OpenMPI on a LAN";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 28 15:15:28 2008" -->
<!-- isoreceived="20081128201528" -->
<!-- sent="Fri, 28 Nov 2008 15:15:19 -0500" -->
<!-- isosent="20081128201519" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on a LAN" -->
<!-- id="49305157.60707_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="492F658D.4050609_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on a LAN<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-28 15:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7377.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<li><strong>Previous message:</strong> <a href="7375.php">Raymond Wan: "Re: [OMPI users] OpenMPI on a LAN"</a>
<li><strong>In reply to:</strong> <a href="7375.php">Raymond Wan: "Re: [OMPI users] OpenMPI on a LAN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7380.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Heitor and list
<br>
<p>For most problems FAQs page is very helpful:
<br>
<p><a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=troubleshooting">http://www.open-mpi.org/faq/?category=troubleshooting</a>
<br>
<p>Also, follow Ray's suggestion, and try to run the examples/hello_c.c (on 
<br>
OMPI source directory)
<br>
program on the two machines.
<br>
<p>Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Raymond Wan wrote:
&gt;
&gt; Hi Heitor,
&gt;
&gt;
&gt; Heitor Florido wrote:
&gt;
&gt;&gt; Hello,
&gt;&gt; I have built an application using opemmpi 1.2.8 that is a client/server
&gt;&gt; application that uses MPI_publish_name and MPI_Lookup_name to start the
&gt;&gt; communication.
&gt;&gt; This application works fine on a single computer.
&gt;&gt; However, i'd like to run it on 2 pcs using linux (ubuntu) connected by a
&gt;&gt; LAN.
&gt;&gt; If I start the server on a computer, my cliente can't find the name
&gt;&gt; published by the server and crashes.
&gt;&gt; What should I do make this work?
&gt;&gt; I believe that my application is correct, so I think I need to 
&gt;&gt; install some
&gt;&gt; other service to make MPI see the other computer.
&gt;&gt; []s
&gt;&gt;   
&gt;
&gt;
&gt;
&gt; Have you installed Open MPI on both computers?  And can you run your 
&gt; application as a single computer on both computers?  (i.e., each one 
&gt; working independently)
&gt;
&gt; If you are concerned about your Open MPI installation, you can try 
&gt; some simple code from the web that has been shown to work to confirm 
&gt; that the problem is not with your application (I'm not saying it is 
&gt; :-), just suggesting that you should remove it from the equation, if 
&gt; you can).
&gt;
&gt; Ray
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7377.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<li><strong>Previous message:</strong> <a href="7375.php">Raymond Wan: "Re: [OMPI users] OpenMPI on a LAN"</a>
<li><strong>In reply to:</strong> <a href="7375.php">Raymond Wan: "Re: [OMPI users] OpenMPI on a LAN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7380.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN"</a>
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
