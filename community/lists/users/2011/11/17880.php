<?
$subject_val = "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 17:35:42 2011" -->
<!-- isoreceived="20111130223542" -->
<!-- sent="Wed, 30 Nov 2011 17:35:17 -0500" -->
<!-- isosent="20111130223517" -->
<!-- name="Patrik Jonsson" -->
<!-- email="code_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications" -->
<!-- id="CA+Py04AhYG_MLf9a17THDjdRSHLc5hEbXaD+gLNCPze4qhWnXA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+Py04APXmiPRKN2+xyi5HOiJs-Y3am2+-bfaKw5_js_AHkJsw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications<br>
<strong>From:</strong> Patrik Jonsson (<em>code_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 17:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17881.php">Ki Hong Pae: "[OMPI users] problem with multiple NICs"</a>
<li><strong>Previous message:</strong> <a href="17879.php">Ralph Castain: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>In reply to:</strong> <a href="17867.php">Patrik Jonsson: "[OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Replying to my own post, I'd like to add some info:
<br>
<p>After making the master thread put more of a premium on receiving the
<br>
missing messages, the problem went away. Both tasks now appear to keep
<br>
up on the messages sent from the other. However, after about a minute
<br>
and ~1.5e6 messages exchanged, both tasks segfault after printing the
<br>
following error:
<br>
<p>[sunrise01.rc.fas.harvard.edu:10009] mca_btl_sm_component_progress
<br>
read an unknown type of header
<br>
<p>The debugger spits me out on line 674 of btl_sm_component.c, in the
<br>
default of a switch on fragment type. There's a comment there that
<br>
says:
<br>
<p>* This code path should presumably never be called.
<br>
* It's unclear if it should exist or, if so, how it should be written.
<br>
* If we want to return it to the sending process,
<br>
* we have to figure out who the sender is.
<br>
* It seems we need to subtract the mask bits.
<br>
* Then, hopefully this is an sm header that has an smp_rank field.
<br>
* Presumably that means the received header was relative.
<br>
* Or, maybe this code should just be removed.
<br>
<p>That seems worrisome, like whoever wrote the code didn't know what was
<br>
going on... I've gotten that error previously, but only when millions
<br>
of outstanding messages had built up. Now, that's not the case.
<br>
<p>Does anyone have any idea what could be going on here?
<br>
<p>Thanks,
<br>
<p>/Patrik J.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17881.php">Ki Hong Pae: "[OMPI users] problem with multiple NICs"</a>
<li><strong>Previous message:</strong> <a href="17879.php">Ralph Castain: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>In reply to:</strong> <a href="17867.php">Patrik Jonsson: "[OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
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
