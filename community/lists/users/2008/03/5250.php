<?
$subject_val = "Re: [OMPI users] More on AlltoAll";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 15:03:41 2008" -->
<!-- isoreceived="20080320190341" -->
<!-- sent="Thu, 20 Mar 2008 12:03:32 -0700" -->
<!-- isosent="20080320190332" -->
<!-- name="Dave Grote" -->
<!-- email="dpgrote_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More on AlltoAll" -->
<!-- id="47E2B504.6060208_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1206036530.6468.73.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] More on AlltoAll<br>
<strong>From:</strong> Dave Grote (<em>dpgrote_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 15:03:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5251.php">Tim Prins: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>In reply to:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5253.php">Terry Frankcombe: "Re: [OMPI users] More on AlltoAll"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<br>
Sorry - my mistake - I meant AlltoAllV, which is what I use in my code.<br>
<br>
Ashley Pittman wrote:
<blockquote
 cite="mid:1206036530.6468.73.camel@bruce.priv.wark.uk.streamline-computing.com"
 type="cite">
  <pre wrap="">On Thu, 2008-03-20 at 10:27 -0700, Dave Grote wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">After reading the previous discussion on AllReduce and AlltoAll, I 
thought I would ask my question. I have a case where I have data 
unevenly distributed among the processes (unevenly means that the 
processes have differing amounts of data) that I need to globally 
redistribute, resulting in a different uneven distribution. Writing the 
code to do the redistribution using AlltoAll is straightforward.

The problem though is that there are often special cases where each 
process only needs to exchange data with it neighbors. So the question 
is that when two processors don't have data to exchange, is the OpenMPI 
AlltoAll is written in such a way so that they don't do any 
communication? Will the AlltoAll be as efficient (or at least nearly as 
efficient) as direct send/recv among neighbors?
    </pre>
  </blockquote>
  <pre wrap=""><!---->
AlltoAll takes a single size of message and communictes that amount of
data from everybody to everybody.  You might want to look at AlltoAllw
and AlltoAllv, neither of which I have any experience of however.

Ashley,

_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5251.php">Tim Prins: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>In reply to:</strong> <a href="5249.php">Ashley Pittman: "Re: [OMPI users] More on AlltoAll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5253.php">Terry Frankcombe: "Re: [OMPI users] More on AlltoAll"</a>
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
