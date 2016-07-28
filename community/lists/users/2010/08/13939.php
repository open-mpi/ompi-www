<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 10:08:04 2010" -->
<!-- isoreceived="20100809140804" -->
<!-- sent="Mon, 09 Aug 2010 07:07:45 -0700" -->
<!-- isosent="20100809140745" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="4C600BB1.7010202_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFF30AFE53.155933F5-ON8525777A.004703A0-8525777A.00472B17_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 10:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13940.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>Previous message:</strong> <a href="13938.php">Jeff Squyres: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>In reply to:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Personally, I've been having trouble following the explanations of the
problem.&nbsp; Perhaps it'd be helpful if you gave us an example of how to
reproduce the problem.&nbsp; E.g., short sample code and how you run the
example to produce the problem.&nbsp; The shorter the example, the greater
the odds of resolution.<br>
<blockquote
 cite="midOFF30AFE53.155933F5-ON8525777A.004703A0-8525777A.00472B17@us.ibm.com"
 type="cite"><br>
  <table width="100%">
    <tbody>
      <tr valign="top">
        <td><font color="#5f5f5f" face="sans-serif" size="1">From:</font>
        </td>
        <td><font face="sans-serif" size="1">Randolph Pullen
<a class="moz-txt-link-rfc2396E" href="mailto:randolph_pullen@yahoo.com.au">&lt;randolph_pullen@yahoo.com.au&gt;</a></font>
        </td>
      </tr>
      <tr valign="top">
        <td><font color="#5f5f5f" face="sans-serif" size="1">To:</font>
        </td>
        <td><font face="sans-serif" size="1"><a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a></font>
        </td>
      </tr>
      <tr valign="top">
        <td><font color="#5f5f5f" face="sans-serif" size="1">Date:</font>
        </td>
        <td><font face="sans-serif" size="1">08/07/2010 01:23 AM</font>
        </td>
      </tr>
      <tr valign="top">
        <td><font color="#5f5f5f" face="sans-serif" size="1">Subject:</font>
        </td>
        <td><font face="sans-serif" size="1">[OMPI users] MPI_Bcast
issue</font>
        </td>
      </tr>
      <tr valign="top">
        <td><font color="#5f5f5f" face="sans-serif" size="1">Sent by:</font>
        </td>
        <td><font face="sans-serif" size="1"><a class="moz-txt-link-abbreviated" href="mailto:users-bounces@open-mpi.org">users-bounces@open-mpi.org</a></font></td>
      </tr>
    </tbody>
  </table>
  <br>
  <table>
    <tbody>
      <tr valign="top">
        <td><font size="3">I seem to be having a problem with MPI_Bcast.<br>
My massive I/O intensive data movement program must broadcast from n to
n nodes. My problem starts because I require 2 processes per node, a
sender
and a receiver and I have implemented these using MPI processes rather
than tackle the complexities of threads on MPI.<br>
        <br>
Consequently, broadcast and calls like alltoall are not completely
helpful.
&nbsp;The dataset is huge and each node must end up with a complete copy
built by the large number of contributing broadcasts from the sending
nodes.
&nbsp;Network efficiency and run time are paramount.<br>
        <br>
As I don&#8217;t want to needlessly broadcast all this data to the sending
nodes
and I have a perfectly good MPI program that distributes globally from
a single node (1 to N), I took the unusual decision to start N copies
of
this program by spawning the MPI system from the PVM system in an
effort
to get my N to N concurrent transfers.<br>
        <br>
It seems that the broadcasts running on concurrent MPI environments
collide
and cause all but the first process to hang waiting for their
broadcasts.
&nbsp;This theory seems to be confirmed by introducing a sleep of n-1
seconds
before the first MPI_Bcast &nbsp;call on each node, which results in the
code working perfectly. &nbsp;(total run time 55 seconds, 3 nodes, standard
TCP stack)<br>
        <br>
My guess is that unlike PVM, OpenMPI implements broadcasts with
broadcasts
rather than multicasts. &nbsp;Can someone confirm this? &nbsp;Is this a
bug?<br>
        <br>
Is there any multicast or N to N broadcast where sender processes can
avoid
participating when they don&#8217;t need to?<br>
        </font></td>
      </tr>
    </tbody>
  </table>
  <br>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13940.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>Previous message:</strong> <a href="13938.php">Jeff Squyres: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>In reply to:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
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
