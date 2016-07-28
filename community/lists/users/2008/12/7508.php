<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 16:46:18 2008" -->
<!-- isoreceived="20081211214618" -->
<!-- sent="Thu, 11 Dec 2008 16:46:10 -0500" -->
<!-- isosent="20081211214610" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="FE5527D1-3DFF-40A9-A1B8-E908DC2A5497_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="493E8EAB.4010600_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock on large numbers of processors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 16:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7507.php">Jeff Squyres: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7481.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Is this the same issue that you're working on?
<br>
<p>(we have a &quot;blocker&quot; bug for v1.3 about deadlock at heavy messaging  
<br>
volume -- on Tuesday, it looked like a bug in our freelist...)
<br>
<p><p>On Dec 9, 2008, at 10:28 AM, Justin wrote:
<br>
<p><span class="quotelev1">&gt; I have tried disabling the shared memory by running with the  
</span><br>
<span class="quotelev1">&gt; following parameters to mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca btl openib,self --mca btl_openib_ib_timeout 23 --mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_use_srq 1 --mca btl_openib_use_rd_max 2048
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately this did not get rid of any hangs and has seemed to  
</span><br>
<span class="quotelev1">&gt; make them more common.  I have now been able to reproduce the  
</span><br>
<span class="quotelev1">&gt; deadlock at 32 processors.  I am now working with an mpi deadlock  
</span><br>
<span class="quotelev1">&gt; detection research code which will hopefully be able to tell me if  
</span><br>
<span class="quotelev1">&gt; there are any deadlocks in our code.  At the same time if any of you  
</span><br>
<span class="quotelev1">&gt; have any suggestions of parameters to openmpi that might alleviate  
</span><br>
<span class="quotelev1">&gt; these deadlocks I would be grateful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf Vandevaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current version of Open MPI installed on ranger is 1.3a1r19685  
</span><br>
<span class="quotelev2">&gt;&gt; which is from early October.  This version has a fix for ticket  
</span><br>
<span class="quotelev2">&gt;&gt; #1378.  Ticket #1449 is not an issue is this case because each node  
</span><br>
<span class="quotelev2">&gt;&gt; has 16 processors and #1449 is for larger SMPs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I am wondering if this is because of ticket <a href="https://svn.open-mpi.org/trac/ompi/ticket/1468">https://svn.open-mpi.org/trac/ompi/ticket/1468</a> 
</span><br>
<span class="quotelev2">&gt;&gt;  which was not yet fixed in the version running on ranger.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As was suggested earlier, running without the sm btl would be a  
</span><br>
<span class="quotelev2">&gt;&gt; clue if this is the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl ^sm a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another way to potentially work around the issue is to increase the  
</span><br>
<span class="quotelev2">&gt;&gt; size of the shared memory backing file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca 1073741824 -mca mpool_sm_max_size 1073741824 a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We will also work with TACC to get an upgraded version of Open MPI  
</span><br>
<span class="quotelev2">&gt;&gt; 1.3 on there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let us know what you find.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/09/08 08:05, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also see <a href="https://svn.open-mpi.org/trac/ompi/ticket/1449">https://svn.open-mpi.org/trac/ompi/ticket/1449</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/9/08, *Lenny Verkhovsky* &lt;lenny.verkhovsky_at_[hidden] &lt;mailto:lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    maybe it's related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/1378">https://svn.open-mpi.org/trac/ompi/ticket/1378</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On 12/5/08, *Justin* &lt;luitjens_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &lt;mailto:luitjens_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        The reason i'd like to disable these eager buffers is to help
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        detect the deadlock better.  I would not run with this for a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        normal run but it would be useful for debugging.  If the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        deadlock is indeed due to our code then disabling any shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        buffers or eager sends would make that deadlock  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reproduceable.           In addition we might be able to lower the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        down.  Right now determining which processor is deadlocks  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        we are using 8K cores and each processor has hundreds of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        messages sent out would be quite difficult.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Thanks for your suggestions,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Justin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            OpenMPI has differnt eager limits for all the network  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; types,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            on your system run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ompi_info --param btl all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            and look for the eager_limits
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            You can set these values to 0 using the syntax I showed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            before. That would disable eager messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            There might be a better way to disable eager messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Not sure why you would want to disable them, they are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            for performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Maybe you would still see a deadlock if every message was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            below the threshold. I think there is a limit of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            of eager messages a receving cpus will accept. Not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            about that though.  I still kind of doubt it though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Try tweaking your buffer sizes,  make the openib  btl  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eager
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            limit the same as shared memory. and see if you get  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locks up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            between hosts and not just shared memory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/~brockp">http://www.umich.edu/~brockp</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            On Dec 5, 2008, at 2:10 PM, Justin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Thank you for this info.  I should add that our code
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                tends to post a lot of sends prior to the other side
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                posting receives.  This causes a lot of unexpected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                messages to exist.  Our code explicitly matches up  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                tags and processors (that is we do not use MPI wild
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                cards).  If we had a dead lock I would think we would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                see it regardless of weather or not we cross the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                roundevous threshold.  I guess one way to test this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                would be to to set this threshold to 0.  If it then  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dead
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                locks we would likely be able to track down the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                deadlock.  Are there any other parameters we can send
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                mpi that will turn off buffering?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Justin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    When ever this happens we found the code to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    deadlock.  users never saw it until they cross  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    eager-&gt;roundevous threshold.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Yes you can disable shared memory with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    mpirun --mca btl ^sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Or you can try increasing the eager limit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    ompi_info --param btl sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    MCA btl: parameter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                             &quot;4096&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    You can modify this limit at run time,  I think
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    (can't test it right now) it is just:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    mpirun --mca btl_sm_eager_limit 40960
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    I think you can also in tweaking these values use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    env Vars in place of putting it all in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    export OMPI_MCA_btl_sm_eager_limit=40960
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    See:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/~brockp">http://www.umich.edu/~brockp</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    On Dec 5, 2008, at 12:22 PM, Justin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        We are currently using OpenMPI 1.3 on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ranger for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        large processor jobs (8K+).  Our code  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        be occasionally deadlocking at random within
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        point to point communication (see stacktrace
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        below).  This code has been tested on many
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        different MPI versions and as far as we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        does not contain a deadlock.  However, in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        past we have ran into problems with shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        memory optimizations within MPI causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        deadlocks.  We can usually avoid these by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        setting a few environment variables to either
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        increase the size of shared memory buffers or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        disable shared memory optimizations all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        together.   Does OpenMPI have any known
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        deadlocks that might be causing our  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deadlocks?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         If are there any work arounds?  Also how  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do we
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        disable shared memory within OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Here is an example of where processors are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hanging:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        #0  0x00002b2df3522683 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        mca_btl_sm_component_progress () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_sm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        #1  0x00002b2df2cb46bf in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_bml_r2_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        /opt/apps/intel10_1/openmpi/1.3/lib/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_bml_r2.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        #2  0x00002b2df0032ea4 in opal_progress ()  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        /opt/apps/intel10_1/openmpi/1.3/lib/libopen- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        #3  0x00002b2ded0d7622 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        ompi_request_default_wait_some () from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        /opt/apps/intel10_1/openmpi/1.3//lib/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        #4  0x00002b2ded109e34 in PMPI_Waitsome ()  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        /opt/apps/intel10_1/openmpi/1.3//lib/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Justin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        users_at_[hidden] &lt;mailto:users_at_open- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/">http://www.open-mpi.org/mailman/listinfo.cgi/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7507.php">Jeff Squyres: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7481.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7509.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
