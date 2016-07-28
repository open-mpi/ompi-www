<?
$subject_val = "Re: [OMPI users] MPI_Comm_create with unequal group arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 10:13:08 2012" -->
<!-- isoreceived="20120120151308" -->
<!-- sent="Fri, 20 Jan 2012 10:13:04 -0500" -->
<!-- isosent="20120120151304" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_create with unequal group arguments" -->
<!-- id="CAANzjEnN92MNWz86CTLJOd4=CDkBGKB=_g=ebJvfzKgUcwU6Lw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F197F2E.7080203_at_fysik.dtu.dk" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 10:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18236.php">Teng Lin: "[OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Previous message:</strong> <a href="18234.php">Jens J&#248;rgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>In reply to:</strong> <a href="18234.php">Jens J&#248;rgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For MPI_Comm_create -all- processes in the communicator must make the call,
<br>
not just those that are in the subgroups. The 2.2 standard states that
<br>
&nbsp;&nbsp;&quot;The function is collective and must be called by all processes in the
<br>
group of comm.&quot;
<br>
<p>However, this is a common misconception about the MPI_Comm_create
<br>
interface, and has encouraged the MPI Forum standardization body to
<br>
consider an additional interface that just requires those processes in the
<br>
specified groups to make the call.
<br>
<p>If you are interested in that proposal below are a few links that you might
<br>
find informative:
<br>
&nbsp;-
<br>
<a href="http://meetings.mpi-forum.org/secretary/2012/01/slides/ticket_286_jan_2012_presentation.pdf">http://meetings.mpi-forum.org/secretary/2012/01/slides/ticket_286_jan_2012_presentation.pdf</a>
<br>
&nbsp;- <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/286">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/286</a>
<br>
<p>The ticket includes a link to an EuroMPI paper regarding the prototype, and
<br>
the specific language being proposed.
<br>
<p>-- Josh
<br>
<p>2012/1/20 Jens J&#248;rgen Mortensen &lt;jensj_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  On 20-01-2012 15:26, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That behavior is permitted by the MPI 2.2 standard. It seems that our
</span><br>
<span class="quotelev1">&gt; documentation is incorrect in this regard. I'll file a bug to fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Just to clarify, in the MPI 2.2 standard in Section 6.4.2 (Communicator
</span><br>
<span class="quotelev1">&gt; Constructors) under MPI_Comm_create it states:
</span><br>
<span class="quotelev1">&gt; &quot;Each process must call with a group argument that is a subgroup of the
</span><br>
<span class="quotelev1">&gt; group associated with comm; this could be MPI_GROUP_EMPTY. The processes
</span><br>
<span class="quotelev1">&gt; may specify different values for the group argument. If a process calls
</span><br>
<span class="quotelev1">&gt; with a non-empty group then all processes in that group must call the
</span><br>
<span class="quotelev1">&gt; function with the same group as argument, that is the same processes in the
</span><br>
<span class="quotelev1">&gt; same order. Otherwise the call is erroneous.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for reporting the man page bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the quick reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it also allowed to call MPI_Comm_create only on those processes that
</span><br>
<span class="quotelev1">&gt; are in the sub-group?  This seems to work also.  Or must one always call
</span><br>
<span class="quotelev1">&gt; MPI_Comm_create on all processes in comm - as the description says.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jens J&#248;rgen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/1/20 Jens J&#248;rgen Mortensen &lt;jensj_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a long time, I have been calling MPI_Comm_create(comm, group,
</span><br>
<span class="quotelev2">&gt;&gt; newcomm) with different values for group on the different processes of
</span><br>
<span class="quotelev2">&gt;&gt; comm.  In pseudo-code, I would create two sub-communicators from a world
</span><br>
<span class="quotelev2">&gt;&gt; with 4 ranks like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if world.rank &lt; 2:
</span><br>
<span class="quotelev2">&gt;&gt;    comm = world.create([0, 1])
</span><br>
<span class="quotelev2">&gt;&gt; else:
</span><br>
<span class="quotelev2">&gt;&gt;    comm = world.create([2, 3])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I read from the MPI_Comm_create description that this way of calling
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_create is erroneous:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;The call is erroneous if not all group arguments have the same value&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Comm_create.3.php#toc7">http://www.open-mpi.org/doc/v1.4/man3/MPI_Comm_create.3.php#toc7</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I guess I have just been lucky that it has worked for me?  Or is it
</span><br>
<span class="quotelev2">&gt;&gt; OK to do what I do?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jens J&#248;rgen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18236.php">Teng Lin: "[OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Previous message:</strong> <a href="18234.php">Jens J&#248;rgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>In reply to:</strong> <a href="18234.php">Jens J&#248;rgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
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
