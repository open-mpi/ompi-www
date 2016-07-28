<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 21 11:20:39 2013" -->
<!-- isoreceived="20130821152039" -->
<!-- sent="Wed, 21 Aug 2013 11:19:57 -0400" -->
<!-- isosent="20130821151957" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="CAPkf6e0fse0WCMggMbqLx8E6Zmr-E6-ztywmUCTt+w7HwvCE1A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-08-21 11:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22536.php">Dave Love: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22534.php">Eloi Gaudry: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Maybe in reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>1. If you use OMPI's --bind-to-core option and then re-bind yourself to
<br>
<span class="quotelev1">&gt; some other core, then all the memory affinity that MPI setup during
</span><br>
<span class="quotelev1">&gt; MPI_Init() will be &quot;wrong&quot; (possibly on a remote numa node).  I would
</span><br>
<span class="quotelev1">&gt; advise against doing this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ah yes!  Noted.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Rather that setting up cpu shielding, you can just use simple API calls
</span><br>
<span class="quotelev1">&gt; or scripting calls to bind each MPI process to wherever you want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The reason for using &quot;cpu shielding&quot; was not to bind processes to cores but
<br>
to ensure that no other processes get scheduled on those cores (some
<br>
stubborn kernel tasks can still disobey cpuset rules but they are too
<br>
lightweight anyway, so that's fine).
<br>
<p><p><p><span class="quotelev1">&gt; $ mpirun --host a,b -np 4 my_binding_script.sh my_mpi_app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where my_binding_script.sh simply invokes a tool like hwloc-bind to bind
</span><br>
<span class="quotelev1">&gt; yourself to whatever socket/core combination you want, and then invokes
</span><br>
<span class="quotelev1">&gt; my_mpi_app (i.e., the real MPI application).  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat my_binding_script.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; exec hwloc-bind socket:1.core:$OMPI_COMM_WORLD_LOCAL_RANK $1
</span><br>
<p><p>As pointed out, it is indeed convenient to use hwloc and its cousins for
<br>
binding processes. It is my understanding, however, that coupling hwloc
<br>
with cpu-shielding will enable exclusive access to cores within the set.
<br>
<p>Thanks again,
<br>
Siddhartha Jana
<br>
<p><p><p><span class="quotelev1">&gt; On Aug 18, 2013, at 7:01 PM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Noted. Thanks again
</span><br>
<span class="quotelev2">&gt; &gt; -- Sid
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 18 August 2013 18:40, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It only has to come after MPI_Init *if* you are telling mpirun to bind
</span><br>
<span class="quotelev1">&gt; you as well. Otherwise, you could just not tell mpirun to bind (it doesn't
</span><br>
<span class="quotelev1">&gt; by default) and then bind anywhere, anytime you like
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 18, 2013, at 3:24 PM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A process can always change its binding by &quot;re-binding&quot; to wherever it
</span><br>
<span class="quotelev1">&gt; wants after MPI_Init completes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Noted. Thanks. I guess the important thing that I wanted to know was
</span><br>
<span class="quotelev1">&gt; that the binding needs to happen *after* MPI_Init() completes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Siddhartha
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 18, 2013, at 9:38 AM, Siddhartha Jana &lt;
</span><br>
<span class="quotelev1">&gt; siddharthajana24_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Firstly, I would like my program to dynamically assign it self to one
</span><br>
<span class="quotelev1">&gt; of the cores it pleases and remain bound to it until it later reschedules
</span><br>
<span class="quotelev1">&gt; itself.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; &quot;If you just want mpirun to respect an external cpuset limitation,
</span><br>
<span class="quotelev1">&gt; it already does so when binding - it will bind within the external
</span><br>
<span class="quotelev1">&gt; limitation&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In my case, the limitation is enforced &quot;internally&quot;, by the
</span><br>
<span class="quotelev1">&gt; application once in begins execution. I enforce this during program
</span><br>
<span class="quotelev1">&gt; execution, after the mpirun has finished &quot;binding within the external
</span><br>
<span class="quotelev1">&gt; limitation&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Brice Goglin said:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;  &quot;MPI can bind at two different times: inside mpirun after ssh
</span><br>
<span class="quotelev1">&gt; before running the actual program (this one would ignore your cpuset),
</span><br>
<span class="quotelev1">&gt; later at MPI_Init inside your program (this one will ignore your cpuset
</span><br>
<span class="quotelev1">&gt; only if you call MPI_Init before creating the cpuset).&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Noted. In that case, during program execution, whose binding is
</span><br>
<span class="quotelev1">&gt; respected - mpirun's or MPI_Init()'s? From the above, is my understanding
</span><br>
<span class="quotelev1">&gt; correct? That MPI_Init() will be responsible for the 2nd round of
</span><br>
<span class="quotelev1">&gt; attempting to bind processes to cores and can override what mpirun or the
</span><br>
<span class="quotelev1">&gt; programmer had enforced before its call (using
</span><br>
<span class="quotelev1">&gt; hwloc/cpuset/sched_load_balance() and other compatible cousins) ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If this is so, in my case the flow of events is thus:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1. mpirun binds an MPI process which is yet to begin execution. So
</span><br>
<span class="quotelev1">&gt; mpirun says: &quot;Bind to some core - A&quot; (I don't use any hostfile/rankfile.
</span><br>
<span class="quotelev1">&gt; but I do use the --bind-to-core flag)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2. Process begins execution on core A
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3. I enforce: &quot;Bind to core B&quot;. (we must remember, it is only at
</span><br>
<span class="quotelev1">&gt; runtime that  I know what core I want to be bound to and not while
</span><br>
<span class="quotelev1">&gt; launching the processes using mpirun). So my process shifts over to core B
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 4. MPI_Init() once again honors rankfile mapping(if any, default
</span><br>
<span class="quotelev1">&gt; policy, otherwise ) and rebinds my process to core A
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 5. process finished execution and calls MPI_Finalize(), all the time
</span><br>
<span class="quotelev1">&gt; on core A
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 6. mpirun exits
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So if I place step-3 above after step-4, my request will hold for the
</span><br>
<span class="quotelev1">&gt; rest of the execution. Please do let me know, if my understanding is
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks for all the help
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Siddhartha Jana
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; HPCTools
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 18 August 2013 10:49, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you require that a specific rank go to a specific core, then use
</span><br>
<span class="quotelev1">&gt; the rankfile mapper - you can see explanations on the syntax in &quot;man mpirun&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you just want mpirun to respect an external cpuset limitation, it
</span><br>
<span class="quotelev1">&gt; already does so when binding - it will bind within the external limitation
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Aug 18, 2013, at 6:09 AM, Siddhartha Jana &lt;
</span><br>
<span class="quotelev1">&gt; siddharthajana24_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; So my question really boils down to:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; How does one ensure that mpirun launches the processes on the
</span><br>
<span class="quotelev1">&gt; &quot;specific&quot; cores that are expected of them to be bound to.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As I mentioned, if there were a way to specify the cores through the
</span><br>
<span class="quotelev1">&gt; hostfile, this problem should be solved.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks for all the quick replies,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- Sid
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 18 August 2013 09:04, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks John. But I have an incredibly small system. 2 nodes - 16
</span><br>
<span class="quotelev1">&gt; cores each.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 2-4 MPI processes. :-)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 18 August 2013 09:03, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; You really should install a job scheduler.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; There are free versions.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm not sure about cpuset support in Gridengine. Anyone?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22536.php">Dave Love: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22534.php">Eloi Gaudry: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Maybe in reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
