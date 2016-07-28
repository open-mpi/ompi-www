<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 21:25:17 2009" -->
<!-- isoreceived="20091203022517" -->
<!-- sent="Thu, 3 Dec 2009 15:25:12 +1300" -->
<!-- isosent="20091203022512" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="1de442a9fbb5b7400fd81db55adeca03.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2173B4FF-7151-4433-A31C-FD881ABA05C7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Pointers%20for%20understanding%20failure%20messages%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-12-02 21:25:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11392.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11390.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11389.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11406.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh bugger, I did miss the obvious.
<br>
<p>The &quot;old&quot; code which I had ifdef'd out contained an actual
<br>
construction of the list itself.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;opal_if_list, opal_list_t);
<br>
<p>If I make sure I do one of those, I now get a different
<br>
set of messages but we are back to running again.
<br>
<p>mpirun -v -n 1 hello_f77
<br>
<p>About to append interface wm0.
<br>
Appended interface wm0.
<br>
[europa.ecs.vuw.ac.nz:12741] opal_sockaddr2str failed:Temporary failure in
<br>
name resolution (return code 4)
<br>
[europa.ecs.vuw.ac.nz:12741] opal_sockaddr2str failed:Temporary failure in
<br>
name resolution (return code 4)
<br>
[europa.ecs.vuw.ac.nz:12741] opal_sockaddr2str failed:Temporary failure in
<br>
name resolution (return code 4)
<br>
[europa.ecs.vuw.ac.nz:12741] opal_sockaddr2str failed:Temporary failure in
<br>
name resolution (return code 4)
<br>
[europa.ecs.vuw.ac.nz:12741] oob_tcp_parse_uri: Could not resolve (null).
<br>
[Error: No address associated with hostname]
<br>
About to append interface wm0.
<br>
Appended interface wm0.
<br>
[europa.ecs.vuw.ac.nz:15348] oob_tcp_parse_uri: Could not resolve (null).
<br>
[Error: No address associated with hostname]
<br>
[europa.ecs.vuw.ac.nz:15348] opal_sockaddr2str failed:Success (return code 4)
<br>
&nbsp;Hello, world, I am  0 of  1
<br>
[europa.ecs.vuw.ac.nz:15348] opal_sockaddr2str failed:Success (return code 4)
<br>
<p>We're getting there.
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11392.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11390.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11389.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11406.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
