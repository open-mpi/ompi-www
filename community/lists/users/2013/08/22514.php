<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 18 18:25:24 2013" -->
<!-- isoreceived="20130818222524" -->
<!-- sent="Sun, 18 Aug 2013 18:24:43 -0400" -->
<!-- isosent="20130818222443" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="CAPkf6e3Yb9PFg+xdYTwBfXiN_hXrnf5NFSX3oFgU4h5VmS6O3Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-08-18 18:24:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22515.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22513.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe in reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22515.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22515.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; A process can always change its binding by &quot;re-binding&quot; to wherever it
</span><br>
<span class="quotelev1">&gt; wants after MPI_Init completes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Noted. Thanks. I guess the important thing that I wanted to know was that
<br>
the binding needs to happen *after* MPI_Init() completes.
<br>
<p>Thanks all
<br>
<p>-- Siddhartha
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2013, at 9:38 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Firstly, I would like my program to dynamically assign it self to one of
</span><br>
<span class="quotelev1">&gt; the cores it pleases and remain bound to it until it later reschedules
</span><br>
<span class="quotelev1">&gt; itself.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:*
</span><br>
<span class="quotelev1">&gt; *&gt;&gt; &quot;If you just want mpirun to respect an external cpuset limitation, it
</span><br>
<span class="quotelev1">&gt; already does so when binding - it will bind within the external limitation&quot;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my case, the limitation is enforced &quot;internally&quot;, by the application
</span><br>
<span class="quotelev1">&gt; once in begins execution. I enforce this during program execution, after
</span><br>
<span class="quotelev1">&gt; the mpirun has finished &quot;binding within the external limitation&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Brice Goglin said*:
</span><br>
<span class="quotelev1">&gt; *&gt;&gt;  &quot;MPI can bind at two different times: inside mpirun after ssh before
</span><br>
<span class="quotelev1">&gt; running the actual program (this one would ignore your cpuset), later at
</span><br>
<span class="quotelev1">&gt; MPI_Init inside your program (this one will ignore your cpuset only if you
</span><br>
<span class="quotelev1">&gt; call MPI_Init before creating the cpuset).&quot;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Noted. In that case, during program execution, whose binding is respected
</span><br>
<span class="quotelev1">&gt; - mpirun's or MPI_Init()'s? From the above, is my understanding correct?
</span><br>
<span class="quotelev1">&gt; That MPI_Init() will be responsible for the 2nd round of attempting to bind
</span><br>
<span class="quotelev1">&gt; processes to cores and can override what mpirun or the programmer had
</span><br>
<span class="quotelev1">&gt; enforced before its call (using hwloc/cpuset/sched_load_balance()* *and
</span><br>
<span class="quotelev1">&gt; other *compatible* cousins) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt; If this is so, in my case the flow of events is thus:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. mpirun binds an MPI process which is yet to begin execution. So mpirun
</span><br>
<span class="quotelev1">&gt; says: &quot;Bind to some core - A&quot; (I don't use any hostfile/rankfile. but I do
</span><br>
<span class="quotelev1">&gt; use the --bind-to-core flag)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Process begins execution on core A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. I enforce: &quot;Bind to core B&quot;. (we must remember, it is only at runtime
</span><br>
<span class="quotelev1">&gt; that  I know what core I want to be bound to and not while launching the
</span><br>
<span class="quotelev1">&gt; processes using mpirun). So my process shifts over to core B
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. MPI_Init() once again honors rankfile mapping(if any, default policy,
</span><br>
<span class="quotelev1">&gt; otherwise ) and rebinds my process to core A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. process finished execution and calls MPI_Finalize(), all the time on
</span><br>
<span class="quotelev1">&gt; core A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6. mpirun exits
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if I place step-3 above after step-4, my request will hold for the rest
</span><br>
<span class="quotelev1">&gt; of the execution. Please do let me know, if my understanding is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all the help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Siddhartha Jana
</span><br>
<span class="quotelev1">&gt; HPCTools
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 18 August 2013 10:49, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you require that a specific rank go to a specific core, then use the
</span><br>
<span class="quotelev2">&gt;&gt; rankfile mapper - you can see explanations on the syntax in &quot;man mpirun&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you just want mpirun to respect an external cpuset limitation, it
</span><br>
<span class="quotelev2">&gt;&gt; already does so when binding - it will bind within the external limitation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 18, 2013, at 6:09 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my question really boils down to:
</span><br>
<span class="quotelev2">&gt;&gt; How does one ensure that mpirun launches the processes on the &quot;specific&quot;
</span><br>
<span class="quotelev2">&gt;&gt; cores that are expected of them to be bound to.
</span><br>
<span class="quotelev2">&gt;&gt; As I mentioned, if there were a way to specify the cores through the
</span><br>
<span class="quotelev2">&gt;&gt; hostfile, this problem should be solved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for all the quick replies,
</span><br>
<span class="quotelev2">&gt;&gt; -- Sid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 18 August 2013 09:04, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks John. But I have an incredibly small system. 2 nodes - 16 cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2-4 MPI processes. :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 18 August 2013 09:03, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You really should install a job scheduler.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are free versions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure about cpuset support in Gridengine. Anyone?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22514/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22515.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22513.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe in reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22515.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22515.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
