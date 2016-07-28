<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 17:48:29 2006" -->
<!-- isoreceived="20060602214829" -->
<!-- sent="Fri, 02 Jun 2006 14:38:59 -0600" -->
<!-- isosent="20060602203859" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on VxWorks?" -->
<!-- id="4480A1E3.3030602_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFC2F6CB82.46261DEA-ON85257181.0060AA04-85257181.00622E0C_at_mck.us.ray.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 16:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1372.php">Brock Palen: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Previous message:</strong> <a href="1370.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>In reply to:</strong> <a href="1367.php">Ali Eghlima: "[OMPI users] OpenMPI on VxWorks?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Hi Ali<br>
<br>
I'm unaware of any firm plans to port either Open MPI or the underlying
OpenRTE run-time to VxWorks, though I have had some initial contact
from others interested in possibly doing so with the latter (part of a
virtual telescope control and data processing system). Being fairly
familiar with VxWorks, I think the OpenRTE port should be relatively
straightforward - in fact, I think there is a high probability that it
will work "out-of-the-box". Ditto for the Open MPI layer.<br>
<br>
The only real issue might be in the atomics section and a handful of
other places that actually configure themselves based on the operating
system they "detect" in the local environment. We recognize OS names
like Linux - I'm not sure what would happen within VxWorks. We might
have to add a few lines here and there to recognize VxWorks, even
though that system is based on Unix (the name probably comes back as
specific to vxworks, as I recall).<br>
<br>
Anyway, I'd be happy to help answer questions if you want to give it a
whirl, and can connect you with others as they try (though that's
probably a little ways off). <br>
<br>
Ralph<br>
<br>
<br>
Ali Eghlima wrote:
<blockquote
 cite="midOFC2F6CB82.46261DEA-ON85257181.0060AA04-85257181.00622E0C@mck.us.ray.com"
 type="cite"><br>
  <font face="sans-serif" size="2">Hello,</font>
  <br>
  <br>
  <font face="sans-serif" size="2">Looking at the OpenMPI web site, I
couldn't
find any reference to support for VxWorks. </font>
  <br>
  <font face="sans-serif" size="2">Here are my questions:</font>
  <br>
  <br>
  <font face="sans-serif" size="2">&nbsp; &nbsp; &nbsp; &nbsp;- &nbsp;Is
there any plan for OpenMPI to run on VxWorks? </font>
  <br>
  <font face="sans-serif" size="2">&nbsp; &nbsp; &nbsp; &nbsp;- &nbsp;Does
anyone has ported/customized OpenMPI to work on VxWorks?</font>
  <br>
  <font face="sans-serif" size="2">&nbsp; &nbsp; &nbsp; &nbsp;- &nbsp;What
level of effort does it take to port OpenMPI to run on VxWorks.</font>
  <br>
  <br>
  <br>
  <font face="sans-serif" size="2">Thanks</font>
  <br>
  <br>
  <font face="sans-serif" size="2">Ali,</font>
  <br>
  <font face="sans-serif" size="2">&nbsp;</font>
  <br>
  <br>
  <br>
  <br>
  <font color="#5f5f5f" face="Arial" size="1">&nbsp;</font>
  <br>
  <font face="Arial" size="2">&nbsp;</font>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1372.php">Brock Palen: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95 Compiler"</a>
<li><strong>Previous message:</strong> <a href="1370.php">Troy Telford: "Re: [OMPI users] openib /compiler issue?"</a>
<li><strong>In reply to:</strong> <a href="1367.php">Ali Eghlima: "[OMPI users] OpenMPI on VxWorks?"</a>
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
