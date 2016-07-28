<?
$subject_val = "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 15:42:59 2011" -->
<!-- isoreceived="20110422194259" -->
<!-- sent="Fri, 22 Apr 2011 15:42:57 -0400" -->
<!-- isosent="20110422194257" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3" -->
<!-- id="4DB1A201.9413.21899138_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3" -->
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
<strong>Subject:</strong> Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20intel%20compiler%20linking%20issue%20and%20issue%20of%20environment%20variable%20on%20remote%20node,%20with%20open%20mpi%201.4.3"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-04-22 15:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16317.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16315.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16317.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Reply:</strong> <a href="16317.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI 1.4.3 + Intel Compilers V8.1 summary:
<br>
(in case someone likes to refer to it later)
<br>
<p>(1) To make all Open MPI executables statically linked and 
<br>
independent of any dynamic libraries,
<br>
&quot;--disable-shared&quot; and &quot;--enable-static&quot; options should BOTH be 
<br>
fowarded to configure, and &quot;-i-static&quot;
<br>
option should be specified for intel compilers too.
<br>
<p>(2) It is confirmed that environment variables could be forwarded to 
<br>
slave nodes, such as $PATH 
<br>
and $LD_LIBARY_PATH, by specifying options to mpirun. 
<br>
However, mpirun will invoke orted daemon on
<br>
master and slave nodes. These environment variables passed to 
<br>
slave nodes via mpirun options does not 
<br>
take into effect before orted started. So if orted daemon needs 
<br>
these environment variables to run,
<br>
the only way is to set these environment variables in a shared 
<br>
.bashrc or .profile file, visible to 
<br>
both master and slave nodes, say, on a shared NFS partition. It 
<br>
seems no other way to resolve this kind
<br>
of dependence.
<br>
<p>Regards,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16317.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16315.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16317.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Reply:</strong> <a href="16317.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
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
