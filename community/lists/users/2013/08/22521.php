<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's	bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 13:18:29 2013" -->
<!-- isoreceived="20130820171829" -->
<!-- sent="Tue, 20 Aug 2013 17:18:28 +0000" -->
<!-- isosent="20130820171828" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's	bind-to-core" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F82233F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPkf6e1Em1b=HrHVt+ia33t4nMWV6gFmYHYkkQECKgqhe2KdTA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's	bind-to-core<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 13:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>In reply to:</strong> <a href="22516.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know I'm late to this conversation, but I was on vacation last week.  Some random points:
<br>
<p>1. If you use OMPI's --bind-to-core option and then re-bind yourself to some other core, then all the memory affinity that MPI setup during MPI_Init() will be &quot;wrong&quot; (possibly on a remote numa node).  I would advise against doing this.
<br>
<p>2. Instead of #1, as Ralph stated, if you're going to do your own process affinity, then don't use OMPI's --bind-to-core (or any --bind-to-* option).  Then MPI won't setup any affinity stuff, and you're good.
<br>
<p>3. Rather that setting up cpu shielding, you can just use simple API calls or scripting calls to bind each MPI process to wherever you want.  For example:
<br>
<p>$ mpirun --host a,b -np 4 my_binding_script.sh my_mpi_app
<br>
<p>Where my_binding_script.sh simply invokes a tool like hwloc-bind to bind yourself to whatever socket/core combination you want, and then invokes my_mpi_app (i.e., the real MPI application).  For example:
<br>
<p>$ cat my_binding_script.sh
<br>
#!/bin/sh
<br>
exec hwloc-bind socket.1:core.$OMPI_COMM_WORLD_LOCAL_RANK $1
<br>
<p>Where $OMPI_COMM_WORLD_LOCAL_RANK is an environment variable that mpirun will put in the environment of the processes that it launches.  Each process will have $OMPI_COMM_WORLD_LOCAL_RANK set to a value in the range of [0,N), where N is the number processes on that server.  In the above example of launching 4 processes (2 on each server a and b), each of the 4 processes would get an $OMPI_COMM_WORLD_LOCAL_RANK value of 0 or 1.
<br>
<p>If you don't know about hwloc, you should -- it's very, very helpful for all this kind of process affinity stuff.  See <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a> (hwloc-bind is one of the tools in the hwloc suite).
<br>
<p><p>On Aug 18, 2013, at 7:01 PM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Noted. Thanks again
</span><br>
<span class="quotelev1">&gt; -- Sid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 18 August 2013 18:40, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It only has to come after MPI_Init *if* you are telling mpirun to bind you as well. Otherwise, you could just not tell mpirun to bind (it doesn't by default) and then bind anywhere, anytime you like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2013, at 3:24 PM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A process can always change its binding by &quot;re-binding&quot; to wherever it wants after MPI_Init completes.
</span><br>
<span class="quotelev2">&gt;&gt; Noted. Thanks. I guess the important thing that I wanted to know was that the binding needs to happen *after* MPI_Init() completes. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Siddhartha
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 18, 2013, at 9:38 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Firstly, I would like my program to dynamically assign it self to one of the cores it pleases and remain bound to it until it later reschedules itself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; &quot;If you just want mpirun to respect an external cpuset limitation, it already does so when binding - it will bind within the external limitation&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my case, the limitation is enforced &quot;internally&quot;, by the application once in begins execution. I enforce this during program execution, after the mpirun has finished &quot;binding within the external limitation&quot;. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice Goglin said:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  &quot;MPI can bind at two different times: inside mpirun after ssh before running the actual program (this one would ignore your cpuset), later at MPI_Init inside your program (this one will ignore your cpuset only if you call MPI_Init before creating the cpuset).&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Noted. In that case, during program execution, whose binding is respected - mpirun's or MPI_Init()'s? From the above, is my understanding correct? That MPI_Init() will be responsible for the 2nd round of attempting to bind processes to cores and can override what mpirun or the programmer had enforced before its call (using hwloc/cpuset/sched_load_balance() and other compatible cousins) ? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If this is so, in my case the flow of events is thus:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. mpirun binds an MPI process which is yet to begin execution. So mpirun says: &quot;Bind to some core - A&quot; (I don't use any hostfile/rankfile. but I do use the --bind-to-core flag) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Process begins execution on core A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. I enforce: &quot;Bind to core B&quot;. (we must remember, it is only at runtime that  I know what core I want to be bound to and not while launching the processes using mpirun). So my process shifts over to core B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. MPI_Init() once again honors rankfile mapping(if any, default policy, otherwise ) and rebinds my process to core A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. process finished execution and calls MPI_Finalize(), all the time on core A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6. mpirun exits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So if I place step-3 above after step-4, my request will hold for the rest of the execution. Please do let me know, if my understanding is correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for all the help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siddhartha Jana
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPCTools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 18 August 2013 10:49, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you require that a specific rank go to a specific core, then use the rankfile mapper - you can see explanations on the syntax in &quot;man mpirun&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you just want mpirun to respect an external cpuset limitation, it already does so when binding - it will bind within the external limitation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 18, 2013, at 6:09 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So my question really boils down to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How does one ensure that mpirun launches the processes on the &quot;specific&quot; cores that are expected of them to be bound to. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As I mentioned, if there were a way to specify the cores through the hostfile, this problem should be solved. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for all the quick replies,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Sid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 18 August 2013 09:04, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks John. But I have an incredibly small system. 2 nodes - 16 cores each.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2-4 MPI processes. :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 18 August 2013 09:03, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
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
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>In reply to:</strong> <a href="22516.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with	mpirun's	bind-to-core"</a>
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
