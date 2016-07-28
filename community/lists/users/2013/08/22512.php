<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 18 12:39:37 2013" -->
<!-- isoreceived="20130818163937" -->
<!-- sent="Sun, 18 Aug 2013 12:38:56 -0400" -->
<!-- isosent="20130818163856" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="CAPkf6e2nyoCU+KckhTytqDsdP4nbjh_E9nBJRDFbgQyzSZvdpw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core<br>
<strong>From:</strong> Siddhartha Jana (<em>siddharthajana24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-18 12:38:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22513.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22511.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe in reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22513.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22513.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Firstly, I would like my program to dynamically assign it self to one of
<br>
the cores it pleases and remain bound to it until it later reschedules
<br>
itself.
<br>
*
<br>
<p>Ralph Castain wrote:*
<br>
*&gt;&gt; &quot;If you just want mpirun to respect an external cpuset limitation, it
<br>
already does so when binding - it will bind within the external limitation&quot;*
<br>
<p>In my case, the limitation is enforced &quot;internally&quot;, by the application
<br>
once in begins execution. I enforce this during program execution, after
<br>
the mpirun has finished &quot;binding within the external limitation&quot;.
<br>
<p><p>*Brice Goglin said*:
<br>
*&gt;&gt;  &quot;MPI can bind at two different times: inside mpirun after ssh before
<br>
running the actual program (this one would ignore your cpuset), later at
<br>
MPI_Init inside your program (this one will ignore your cpuset only if you
<br>
call MPI_Init before creating the cpuset).&quot;*
<br>
<p>Noted. In that case, during program execution, whose binding is respected -
<br>
mpirun's or MPI_Init()'s? From the above, is my understanding correct? That
<br>
MPI_Init() will be responsible for the 2nd round of attempting to bind
<br>
processes to cores and can override what mpirun or the programmer had
<br>
enforced before its call (using hwloc/cpuset/sched_load_balance()* *and
<br>
other *compatible* cousins) ?
<br>
<p><p>--------------------------------------------
<br>
If this is so, in my case the flow of events is thus:
<br>
<p>1. mpirun binds an MPI process which is yet to begin execution. So mpirun
<br>
says: &quot;Bind to some core - A&quot; (I don't use any hostfile/rankfile. but I do
<br>
use the --bind-to-core flag)
<br>
<p>2. Process begins execution on core A
<br>
<p>3. I enforce: &quot;Bind to core B&quot;. (we must remember, it is only at runtime
<br>
that  I know what core I want to be bound to and not while launching the
<br>
processes using mpirun). So my process shifts over to core B
<br>
<p>4. MPI_Init() once again honors rankfile mapping(if any, default policy,
<br>
otherwise ) and rebinds my process to core A
<br>
<p>5. process finished execution and calls MPI_Finalize(), all the time on
<br>
core A
<br>
<p>6. mpirun exits
<br>
--------------------------------------------
<br>
<p>So if I place step-3 above after step-4, my request will hold for the rest
<br>
of the execution. Please do let me know, if my understanding is correct.
<br>
<p>Thanks for all the help
<br>
<p>Sincerely,
<br>
Siddhartha Jana
<br>
HPCTools
<br>
<p><p><p><p><p><p><p><p>On 18 August 2013 10:49, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If you require that a specific rank go to a specific core, then use the
</span><br>
<span class="quotelev1">&gt; rankfile mapper - you can see explanations on the syntax in &quot;man mpirun&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you just want mpirun to respect an external cpuset limitation, it
</span><br>
<span class="quotelev1">&gt; already does so when binding - it will bind within the external limitation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2013, at 6:09 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question really boils down to:
</span><br>
<span class="quotelev1">&gt; How does one ensure that mpirun launches the processes on the &quot;specific&quot;
</span><br>
<span class="quotelev1">&gt; cores that are expected of them to be bound to.
</span><br>
<span class="quotelev1">&gt; As I mentioned, if there were a way to specify the cores through the
</span><br>
<span class="quotelev1">&gt; hostfile, this problem should be solved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all the quick replies,
</span><br>
<span class="quotelev1">&gt; -- Sid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 18 August 2013 09:04, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks John. But I have an incredibly small system. 2 nodes - 16 cores
</span><br>
<span class="quotelev2">&gt;&gt; each.
</span><br>
<span class="quotelev2">&gt;&gt; 2-4 MPI processes. :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 18 August 2013 09:03, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You really should install a job scheduler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are free versions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure about cpuset support in Gridengine. Anyone?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22512/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22513.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22511.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe in reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22513.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22513.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
