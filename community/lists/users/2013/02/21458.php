<?
$subject_val = "Re: [OMPI users] MPI send recv confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 08:55:54 2013" -->
<!-- isoreceived="20130225135554" -->
<!-- sent="Mon, 25 Feb 2013 13:55:48 +0000" -->
<!-- isosent="20130225135548" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI send recv confusion" -->
<!-- id="0583E422-D6F7-4EAC-BD37-459DC18999A8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAL_eiiT4_AgJfRYpZs4c_FYbTThiL8pUn9skBfJpEuEQCpxmuw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI send recv confusion<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-25 08:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21459.php">Dan Beatty: "Re: [OMPI users] uDAPL status"</a>
<li><strong>Previous message:</strong> <a href="21457.php">Mohammad Mohsenie: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>In reply to:</strong> <a href="21433.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, though, MPI says that they are different typed. You should use MPI integer in fortran, just to be more correct/safe.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Feb 21, 2013, at 10:56 AM, &quot;Pradeep Jha&quot; &lt;pradeep_at_[hidden]&lt;mailto:pradeep_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>2013/2/21 Gus Correa &lt;gus_at_[hidden]&lt;mailto:gus_at_[hidden]&gt;&gt;
<br>
two types are the same size,
<br>
but I wonder if somehow the two type names are interchangeable
<br>
in OpenMPI (I would guess they're not),
<br>
although declared
<br>
<p>Hello,
<br>
<p>No, I didnt had to change that. They both work fine for me.
<br>
<p>Pradeep
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21458/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21459.php">Dan Beatty: "Re: [OMPI users] uDAPL status"</a>
<li><strong>Previous message:</strong> <a href="21457.php">Mohammad Mohsenie: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>In reply to:</strong> <a href="21433.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
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
