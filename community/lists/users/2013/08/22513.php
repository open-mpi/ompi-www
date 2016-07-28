<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 18 13:12:02 2013" -->
<!-- isoreceived="20130818171202" -->
<!-- sent="Sun, 18 Aug 2013 10:11:58 -0700" -->
<!-- isosent="20130818171158" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="5D866977-BED1-408E-9919-F40C78BA935A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPkf6e2nyoCU+KckhTytqDsdP4nbjh_E9nBJRDFbgQyzSZvdpw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-18 13:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22514.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22512.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22512.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22514.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A process can always change its binding by &quot;re-binding&quot; to wherever it wants after MPI_Init completes.
<br>
<p><p>On Aug 18, 2013, at 9:38 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Firstly, I would like my program to dynamically assign it self to one of the cores it pleases and remain bound to it until it later reschedules itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;If you just want mpirun to respect an external cpuset limitation, it already does so when binding - it will bind within the external limitation&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my case, the limitation is enforced &quot;internally&quot;, by the application once in begins execution. I enforce this during program execution, after the mpirun has finished &quot;binding within the external limitation&quot;. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice Goglin said:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  &quot;MPI can bind at two different times: inside mpirun after ssh before running the actual program (this one would ignore your cpuset), later at MPI_Init inside your program (this one will ignore your cpuset only if you call MPI_Init before creating the cpuset).&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Noted. In that case, during program execution, whose binding is respected - mpirun's or MPI_Init()'s? From the above, is my understanding correct? That MPI_Init() will be responsible for the 2nd round of attempting to bind processes to cores and can override what mpirun or the programmer had enforced before its call (using hwloc/cpuset/sched_load_balance() and other compatible cousins) ? 
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
<span class="quotelev1">&gt; 1. mpirun binds an MPI process which is yet to begin execution. So mpirun says: &quot;Bind to some core - A&quot; (I don't use any hostfile/rankfile. but I do use the --bind-to-core flag) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Process begins execution on core A
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. I enforce: &quot;Bind to core B&quot;. (we must remember, it is only at runtime that  I know what core I want to be bound to and not while launching the processes using mpirun). So my process shifts over to core B
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. MPI_Init() once again honors rankfile mapping(if any, default policy, otherwise ) and rebinds my process to core A
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. process finished execution and calls MPI_Finalize(), all the time on core A
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. mpirun exits
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if I place step-3 above after step-4, my request will hold for the rest of the execution. Please do let me know, if my understanding is correct.
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
<span class="quotelev1">&gt; If you require that a specific rank go to a specific core, then use the rankfile mapper - you can see explanations on the syntax in &quot;man mpirun&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you just want mpirun to respect an external cpuset limitation, it already does so when binding - it will bind within the external limitation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2013, at 6:09 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So my question really boils down to:
</span><br>
<span class="quotelev2">&gt;&gt; How does one ensure that mpirun launches the processes on the &quot;specific&quot; cores that are expected of them to be bound to. 
</span><br>
<span class="quotelev2">&gt;&gt; As I mentioned, if there were a way to specify the cores through the hostfile, this problem should be solved. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for all the quick replies,
</span><br>
<span class="quotelev2">&gt;&gt; -- Sid
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 18 August 2013 09:04, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks John. But I have an incredibly small system. 2 nodes - 16 cores each.
</span><br>
<span class="quotelev2">&gt;&gt; 2-4 MPI processes. :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 18 August 2013 09:03, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You really should install a job scheduler.
</span><br>
<span class="quotelev2">&gt;&gt; There are free versions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure about cpuset support in Gridengine. Anyone?
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22514.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22512.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22512.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22514.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
