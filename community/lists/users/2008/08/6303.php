<?
$subject_val = "[OMPI users] Problem using VampirTrace";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 10:47:56 2008" -->
<!-- isoreceived="20080811144756" -->
<!-- sent="Mon, 11 Aug 2008 16:47:54 +0200" -->
<!-- isosent="20080811144754" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="[OMPI users] Problem using VampirTrace" -->
<!-- id="48A0511A.3020100_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem using VampirTrace<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-11 10:47:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6304.php">Abhishek Kulkarni: "[OMPI users] OMPI without-rte-support?"</a>
<li><strong>Previous message:</strong> <a href="6302.php">Jitendra Kumar: "[OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6539.php">Thomas Ropars: "Re: [OMPI users] Problem using VampirTrace"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6539.php">Thomas Ropars: "Re: [OMPI users] Problem using VampirTrace"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm trying to use VampirTrace.
<br>
I'm working with r19234 of svn trunk.
<br>
<p>When I try to run a simple application with 4 processes on the same 
<br>
computer, it works well.
<br>
But if try to use the same application with the 4 processes executed on 
<br>
4 different computers, I never get the .otf file.
<br>
<p>I've tried to run with VT_VERBOSE=yes, and I get the following trace:
<br>
<p>VampirTrace: Thread object #0 created, total number is 1
<br>
VampirTrace: Opened OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe8349ca.3294 id 1] for generation [buffer 32000000 
<br>
bytes]
<br>
VampirTrace: Thread object #0 created, total number is 1
<br>
VampirTrace: Opened OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe834bca.3020 id 1] for generation [buffer 32000000 
<br>
bytes]
<br>
VampirTrace: Thread object #0 created, total number is 1
<br>
VampirTrace: Opened OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe834aca.3040 id 1] for generation [buffer 32000000 
<br>
bytes]
<br>
VampirTrace: Thread object #0 created, total number is 1
<br>
VampirTrace: Opened OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe834fca.3011 id 1] for generation [buffer 32000000 
<br>
bytes]
<br>
Ring : Start
<br>
Ring : End
<br>
[1]VampirTrace: Flushed OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe834aca.3040 id 1]
<br>
[2]VampirTrace: Flushed OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe834bca.3020 id 1]
<br>
[1]VampirTrace: Closed OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe834aca.3040 id 1]
<br>
[3]VampirTrace: Flushed OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe834fca.3011 id 1]
<br>
[2]VampirTrace: Closed OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe834bca.3020 id 1]
<br>
[0]VampirTrace: Flushed OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe8349ca.3294 id 1]
<br>
[1]VampirTrace: Wrote unify control file ./ring-vt.2.uctl
<br>
[2]VampirTrace: Wrote unify control file ./ring-vt.3.uctl
<br>
[3]VampirTrace: Closed OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe834fca.3011 id 1]
<br>
[0]VampirTrace: Closed OTF writer stream [namestub 
<br>
/tmp/ring-vt.fffffffffe8349ca.3294 id 1]
<br>
[0]VampirTrace: Wrote unify control file ./ring-vt.1.uctl
<br>
[0]VampirTrace: Checking for ./ring-vt.1.uctl ...
<br>
[0]VampirTrace: Checking for ./ring-vt.2.uctl ...
<br>
[1]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834aca.3040.1.def
<br>
[2]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834bca.3020.1.def
<br>
[3]VampirTrace: Wrote unify control file ./ring-vt.4.uctl
<br>
[1]VampirTrace: Removed trace file 
<br>
/tmp/ring-vt.fffffffffe834aca.3040.1.events
<br>
[2]VampirTrace: Removed trace file 
<br>
/tmp/ring-vt.fffffffffe834bca.3020.1.events
<br>
[3]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834fca.3011.1.def
<br>
[1]VampirTrace: Thread object #0 deleted, leaving 0
<br>
[2]VampirTrace: Thread object #0 deleted, leaving 0
<br>
[3]VampirTrace: Removed trace file 
<br>
/tmp/ring-vt.fffffffffe834fca.3011.1.events
<br>
[3]VampirTrace: Thread object #0 deleted, leaving 0
<br>
<p><p>Regards
<br>
<p>Thomas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6304.php">Abhishek Kulkarni: "[OMPI users] OMPI without-rte-support?"</a>
<li><strong>Previous message:</strong> <a href="6302.php">Jitendra Kumar: "[OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6539.php">Thomas Ropars: "Re: [OMPI users] Problem using VampirTrace"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6539.php">Thomas Ropars: "Re: [OMPI users] Problem using VampirTrace"</a>
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
