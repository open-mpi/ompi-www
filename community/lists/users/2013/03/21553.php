<?
$subject_val = "[OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 18 15:56:44 2013" -->
<!-- isoreceived="20130318195644" -->
<!-- sent="Mon, 18 Mar 2013 15:56:43 -0400 (EDT)" -->
<!-- isosent="20130318195643" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="[OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error" -->
<!-- id="alpine.LRH.2.03.1303181550100.21844_at_cs.indiana.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-18 15:56:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21554.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21566.php">Ralph Castain: "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<li><strong>Reply:</strong> <a href="21566.php">Ralph Castain: "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If a user gives an invalid value for the opal_signal MCA parameter, such 
<br>
as in the command:
<br>
<p>mpirun -mca opal_signal x /bin/ls
<br>
<p>the error produced by Open MPI 1.6.3 is:
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;opal_util_register_stackhandlers failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value -5 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p>which claims to be an internal error, not an invalid argument given by a 
<br>
user.  That parameter also appears to be poorly documented in general 
<br>
(mentioned in ompi_info -a and on the mailing lists), and seems like it 
<br>
would be an incredibly useful debugging tool when running a crashing 
<br>
application under a debugger.
<br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21554.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21566.php">Ralph Castain: "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<li><strong>Reply:</strong> <a href="21566.php">Ralph Castain: "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
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
