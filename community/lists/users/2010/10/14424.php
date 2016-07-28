<?
$subject_val = "Re: [OMPI users] OpenMPI and glut";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 13:25:36 2010" -->
<!-- isoreceived="20101008172536" -->
<!-- sent="Fri, 8 Oct 2010 11:39:10 -0500" -->
<!-- isosent="20101008163910" -->
<!-- name="Ed Peddycoart" -->
<!-- email="EPeddycoart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and glut" -->
<!-- id="C5FD53FFC7D1704890B0B1FE85A004F6037B4BCB_at_cyclone.aegis.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C5FD53FFC7D1704890B0B1FE85A004F6037B4BC9_at_cyclone.aegis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and glut<br>
<strong>From:</strong> Ed Peddycoart (<em>EPeddycoart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-08 12:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14425.php">Eugene Loh: "Re: [OMPI users] OpenMPI and glut"</a>
<li><strong>Previous message:</strong> <a href="14423.php">Ed Peddycoart: "[OMPI users] OpenMPI and glut"</a>
<li><strong>In reply to:</strong> <a href="14423.php">Ed Peddycoart: "[OMPI users] OpenMPI and glut"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14425.php">Eugene Loh: "Re: [OMPI users] OpenMPI and glut"</a>
<li><strong>Reply:</strong> <a href="14425.php">Eugene Loh: "Re: [OMPI users] OpenMPI and glut"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After searching some more and reading some FAQs on the opmi website,  I see sugestions on how to make a remote app use the local display to render, but that isn't what I need... Let me revise or clarify my question:  
<br>
&nbsp;
<br>
I have an app which will run on 5 machines:  The app will be kicked off on Machine0.  Machine1,2,3,4 will render a scene to their own display, then send data to Machine0, which will use the data as input to render its scene, which will be rendered on its own display.  
<br>
&nbsp;
<br>
Also, Is my understand of rank correct:  Rank is like a App ID#?  Rank = 0 is the initial process? and 1-N is all others?   
<br>
&nbsp;
<br>
Ed
<br>
&nbsp;
<br>
<p>&nbsp;
<br>
________________________________
<br>
<p>From: Ed Peddycoart
<br>
Sent: Fri 10/8/2010 11:10 AM
<br>
To: users_at_[hidden]
<br>
Subject: OpenMPI and glut
<br>
<p><p>I have a glut app I am infusing with MPI calls... The glut init appears to fail in the rank1 processes.  How do I accomplish this, that is, parallel rendering with GLUT and MPI?
<br>
&nbsp;
<br>
Ed
<br>
&nbsp;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14425.php">Eugene Loh: "Re: [OMPI users] OpenMPI and glut"</a>
<li><strong>Previous message:</strong> <a href="14423.php">Ed Peddycoart: "[OMPI users] OpenMPI and glut"</a>
<li><strong>In reply to:</strong> <a href="14423.php">Ed Peddycoart: "[OMPI users] OpenMPI and glut"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14425.php">Eugene Loh: "Re: [OMPI users] OpenMPI and glut"</a>
<li><strong>Reply:</strong> <a href="14425.php">Eugene Loh: "Re: [OMPI users] OpenMPI and glut"</a>
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
