<?
$subject_val = "Re: [OMPI users] MPI_Comm_create with unequal group arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 09:50:28 2012" -->
<!-- isoreceived="20120120145028" -->
<!-- sent="Fri, 20 Jan 2012 15:50:22 +0100" -->
<!-- isosent="20120120145022" -->
<!-- name="Jens J&#248;rgen Mortensen" -->
<!-- email="jensj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_create with unequal group arguments" -->
<!-- id="4F197F2E.7080203_at_fysik.dtu.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEku+jwGgaGfZr4CHTxMrJZzu04ER_59AiJcFbNc=p0ptg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_create with unequal group arguments<br>
<strong>From:</strong> Jens J&#248;rgen Mortensen (<em>jensj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 09:50:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18235.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Previous message:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>In reply to:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18235.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Reply:</strong> <a href="18235.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20-01-2012 15:26, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; That behavior is permitted by the MPI 2.2 standard. It seems that our 
</span><br>
<span class="quotelev1">&gt; documentation is incorrect in this regard. I'll file a bug to fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to clarify, in the MPI 2.2 standard in Section 6.4.2 
</span><br>
<span class="quotelev1">&gt; (Communicator Constructors) under MPI_Comm_create it states:
</span><br>
<span class="quotelev1">&gt; &quot;Each process must call with a group argument that is a subgroup of 
</span><br>
<span class="quotelev1">&gt; the group associated with comm; this could be MPI_GROUP_EMPTY. The 
</span><br>
<span class="quotelev1">&gt; processes may specify different values for the group argument. If a 
</span><br>
<span class="quotelev1">&gt; process calls with a non-empty group then all processes in that group 
</span><br>
<span class="quotelev1">&gt; must call the function with the same group as argument, that is the 
</span><br>
<span class="quotelev1">&gt; same processes in the same order. Otherwise the call is erroneous.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for reporting the man page bug.
</span><br>
<p>Thanks for the quick reply.
<br>
<p>Is it also allowed to call MPI_Comm_create only on those processes that 
<br>
are in the sub-group?  This seems to work also.  Or must one always call 
<br>
MPI_Comm_create on all processes in comm - as the description says.
<br>
<p>Jens J&#248;rgen
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/1/20 Jens J&#248;rgen Mortensen &lt;jensj_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jensj_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For a long time, I have been calling MPI_Comm_create(comm, group,
</span><br>
<span class="quotelev1">&gt;     newcomm) with different values for group on the different
</span><br>
<span class="quotelev1">&gt;     processes of comm.  In pseudo-code, I would create two
</span><br>
<span class="quotelev1">&gt;     sub-communicators from a world with 4 ranks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if world.rank &lt; 2:
</span><br>
<span class="quotelev1">&gt;        comm = world.create([0, 1])
</span><br>
<span class="quotelev1">&gt;     else:
</span><br>
<span class="quotelev1">&gt;        comm = world.create([2, 3])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Now I read from the MPI_Comm_create description that this way of
</span><br>
<span class="quotelev1">&gt;     calling MPI_Comm_create is erroneous:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      &quot;The call is erroneous if not all group arguments have the same
</span><br>
<span class="quotelev1">&gt;     value&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Comm_create.3.php#toc7">http://www.open-mpi.org/doc/v1.4/man3/MPI_Comm_create.3.php#toc7</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So, I guess I have just been lucky that it has worked for me?  Or
</span><br>
<span class="quotelev1">&gt;     is it OK to do what I do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Jens J&#248;rgen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a> &lt;<a href="http://users.nccs.gov/%7Ejjhursey">http://users.nccs.gov/%7Ejjhursey</a>&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18235.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Previous message:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>In reply to:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18235.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Reply:</strong> <a href="18235.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
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
