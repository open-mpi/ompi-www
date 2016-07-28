<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  4 05:46:48 2006" -->
<!-- isoreceived="20060404094648" -->
<!-- sent="Tue, 04 Apr 2006 03:46:44 -0600" -->
<!-- isosent="20060404094644" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cygwin support" -->
<!-- id="44324084.7040802_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="843252F3-5490-4AFC-95D4-B0DEB4659C47_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-04-04 05:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Previous message:</strong> <a href="0955.php">George Bosilca: "Re: [OMPI users] cygwin support"</a>
<li><strong>In reply to:</strong> <a href="0955.php">George Bosilca: "Re: [OMPI users] cygwin support"</a>
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
Actually, my experience is that the trunk version will not compile
under cygwin - specifically, the stacktrace utility seems to fail to
compile.<br>
<br>
Perhaps that has changed recently, but that was a sticking point for
quite some time. You might encounter a problem there.<br>
<br>
Ralph<br>
<br>
George Bosilca wrote:
<blockquote cite="mid843252F3-5490-4AFC-95D4-B0DEB4659C47@cs.utk.edu"
 type="cite">
  <pre wrap="">On Apr 4, 2006, at 2:50 AM, sundar j wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">can i use cygwin to build open mpi ? how good is the fault  
tolerance that comes with the open mpi.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
You should be able to use the trunk version to compile under cygwin  
and/or mingw. Right now, there is no fault tolerance support in Open  
MPI. Check again in few months, as we plan to add support for several  
fault tolerance models shortly.

   Thanks,
     george.

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
<li><strong>Next message:</strong> <a href="0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Previous message:</strong> <a href="0955.php">George Bosilca: "Re: [OMPI users] cygwin support"</a>
<li><strong>In reply to:</strong> <a href="0955.php">George Bosilca: "Re: [OMPI users] cygwin support"</a>
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
