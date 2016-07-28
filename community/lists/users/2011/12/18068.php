<?
$subject_val = "[OMPI users] Problems when running open-MPI on OFED";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 29 02:34:23 2011" -->
<!-- isoreceived="20111229073423" -->
<!-- sent="Thu, 29 Dec 2011 13:04:18 +0530" -->
<!-- isosent="20111229073418" -->
<!-- name="Venkateswara Rao Dokku" -->
<!-- email="dvrao.584_at_[hidden]" -->
<!-- subject="[OMPI users] Problems when running open-MPI on OFED" -->
<!-- id="CACiOAODJBWTjsQrDV5it-9peQu+Bapg58=B=S+tLDh=NYWAw2w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problems when running open-MPI on OFED<br>
<strong>From:</strong> Venkateswara Rao Dokku (<em>dvrao.584_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-29 02:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18069.php">Yevgeny Kliteynik: "Re: [OMPI users] Problems when running open-MPI on OFED"</a>
<li><strong>Previous message:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18069.php">Yevgeny Kliteynik: "Re: [OMPI users] Problems when running open-MPI on OFED"</a>
<li><strong>Reply:</strong> <a href="18069.php">Yevgeny Kliteynik: "Re: [OMPI users] Problems when running open-MPI on OFED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;We tried running the Intel Benchmarks(IMB_3.2) on the customized
<br>
OFED(that was build by us).. While executing the tests we are getting the
<br>
following errors
<br>
1.
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics stack has reported a network error event.  Open MPI
<br>
will try to continue, but your job may end up failing.
<br>
<p>&nbsp;&nbsp;Local host:        localhost.localdomain
<br>
&nbsp;&nbsp;MPI process PID:   5259
<br>
&nbsp;&nbsp;Error number:      2 (IBV_EVENT_QP_REQ_ERR)
<br>
<p>This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
--------------------------------------------------------------------------
<br>
2.
<br>
While executing the Reduce_scatter benchmark..
<br>
[localhost.localdomain:04437] *** An error occurred in MPI_Reduce_scatter
<br>
[localhost.localdomain:04437] *** on communicator MPI COMMUNICATOR 3 SPLIT
<br>
FROM 0
<br>
[localhost.localdomain:04437] *** MPI_ERR_TRUNCATE: message truncated
<br>
[localhost.localdomain:04437] *** MPI_ERRORS_ARE_FATAL (your MPI job will
<br>
now abort)
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>What is the root cause for those errors??, and any suggestions on how to
<br>
remove those errors..!!!
<br>
<p>Thanks for your reply..
<br>
<p><p><pre>
-- 
Thanks &amp; Regards,
D.Venkateswara Rao,
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18068/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18069.php">Yevgeny Kliteynik: "Re: [OMPI users] Problems when running open-MPI on OFED"</a>
<li><strong>Previous message:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18069.php">Yevgeny Kliteynik: "Re: [OMPI users] Problems when running open-MPI on OFED"</a>
<li><strong>Reply:</strong> <a href="18069.php">Yevgeny Kliteynik: "Re: [OMPI users] Problems when running open-MPI on OFED"</a>
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
