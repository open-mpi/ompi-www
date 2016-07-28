<?
$subject_val = "Re: [OMPI devel] Open MPI BTL meeting in Knoxville";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 11:08:00 2013" -->
<!-- isoreceived="20130305160800" -->
<!-- sent="Tue, 5 Mar 2013 17:07:54 +0100" -->
<!-- isosent="20130305160754" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI BTL meeting in Knoxville" -->
<!-- id="93ACAD28-738D-4A31-A249-EF87925264CC_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F6C669_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI BTL meeting in Knoxville<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 11:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12187.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Style question: // in C code"</a>
<li><strong>Previous message:</strong> <a href="12185.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<li><strong>In reply to:</strong> <a href="12185.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>[This is in complement to the internal notes that Jeff sent out earlier.]
<br>
<p>As you might have heard some of us had a meeting few weeks ago at UTK to talk about the BTL, and their possible move down at the OPAL level. As a result several key components have been identified as susceptible candidates that must be moved prior to the BTL. You might have already noticed some of the changes identified during this meeting have already begun.
<br>
<p>Here is a comprehensive list of things to be moved. The ones marked with * have been already completed.
<br>
* Modex (ortedb)
<br>
- Mpool + rcache + conv
<br>
* Help messaging (get rid of ompi_show_help by replacing it with opal_show_help)
<br>
- RML / OOB
<br>
- BTL
<br>
<p>Two additional things to be addressed and clearly defined during this move are:
<br>
<p>- Naming + Endpoints: For now we'll go with an uint64_t packaged as an OPAL type (to be defined). This naming will only be used during the initial steps, up to when the upper layer (RTE or OMPI) is taking control, and the corresponding naming scheme will be used. This name is provided by the upper layer, OPAL will only used it as an index in the opal_db.
<br>
<p>- Threads safety: Minimize the locking per unit of usage. For this we will cleanup the locking to only keep two methods: lower and upper (almost as they are today). The meaning is that lower case __always__ has the protected meaning, while the upper-case will be surrounded by an &quot;if(threads_active)&quot;. Moreover, the upper-case version will be removed from the OPAL level into the OMPI label (thus their name will change from OPAL_* to OMPI_*). 
<br>
<p><span class="quotelev1">&gt;From a technical perspective, few other ideas have bee throw around:
</span><br>
<p>- orte_show_help should lose the DECLSPEC, and it's usage should be confined to the ORTE layer.
<br>
- fix UDCM !!!
<br>
- everything that is not performance critical from the MPI standard will be protected by a big lock. One lock per type of resources (attributes, info, whatever else)
<br>
- redo the dynamic processing layer
<br>
<p>After all these discussions we ended up with a plan to move forward.
<br>
Step -2: Remove Solaris threads
<br>
Step -1: Fix UDCM/openib
<br>
Step 0: opal_db/modex_db down in the OPAL
<br>
Step 0.5: shared opal_db on the node (may be delayed it is not critical).
<br>
Step 1: move the BTLs and all the other needed components.
<br>
Step 2: Always enable locking in BTL. Evaluate the impact on the performance before enabling.
<br>
Step 3: Fix the atomics (lower case and upper case). The condition in upper-case should disappear.
<br>
Step 4: Fix the perfs (if necessary), and redesign the locking strategy.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><p><p><p>On Mar 5, 2013, at 16:33 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry it took so long to forward these notes to everyone.  Here's some notes from the BTL meeting we had in Knoxville a few weeks ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Date: 
</span><br>
<span class="quotelev2">&gt;&gt;   Feb. 12, 2013
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; People: 
</span><br>
<span class="quotelev2">&gt;&gt;   Thomas Herault
</span><br>
<span class="quotelev2">&gt;&gt;   George Bosilca
</span><br>
<span class="quotelev2">&gt;&gt;   Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;   Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;   Aurelien Bouteiller
</span><br>
<span class="quotelev2">&gt;&gt;   Ralf Castain
</span><br>
<span class="quotelev2">&gt;&gt;   Nathan Hjelmn
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Goal: 
</span><br>
<span class="quotelev2">&gt;&gt;   Lay out the general design of moving the BTL framework into OPAL. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -== Identifying dependencies ==-    
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTL
</span><br>
<span class="quotelev2">&gt;&gt; +------&gt; Modex
</span><br>
<span class="quotelev2">&gt;&gt; +------&gt; Mpool + rcache + conv
</span><br>
<span class="quotelev2">&gt;&gt; +------&gt; bml / allocators
</span><br>
<span class="quotelev2">&gt;&gt; +------&gt; Help/*
</span><br>
<span class="quotelev2">&gt;&gt; +------&gt; Naming + Endpoints?
</span><br>
<span class="quotelev2">&gt;&gt; +------&gt; (RML/OOB)
</span><br>
<span class="quotelev2">&gt;&gt; +------&gt; Threads
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==== ACTION PLAN ====
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 0. Remove Solaris Threads (--with-thread option is attached)
</span><br>
<span class="quotelev2">&gt;&gt; 1. Opal DB/modex
</span><br>
<span class="quotelev2">&gt;&gt; 1.b OpenIB UDCM independent from OOB
</span><br>
<span class="quotelev2">&gt;&gt; 2. Move BTL down to OPAL
</span><br>
<span class="quotelev2">&gt;&gt; 3. Move to locks to lowercase versions (that are always locking), look at perf.
</span><br>
<span class="quotelev2">&gt;&gt; 4. Look at conditions, atomics, etc
</span><br>
<span class="quotelev2">&gt;&gt; 4.5: add big locks on things that are maybe not thread safe and not performance critical
</span><br>
<span class="quotelev2">&gt;&gt; 5. Fix perf/redesign locking (in SM, in particular)
</span><br>
<span class="quotelev2">&gt;&gt; 6. Use BTL tcp in place of OOB in ORTE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==== DETAIL OF ISSUES ====
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -== IB BTL boostrapping ==-
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IB BTL is the only one that depends on OOB/RML
</span><br>
<span class="quotelev2">&gt;&gt; Options: 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Use the TCP BTL to boostrap IB BTL. Brian doesn't like this, because
</span><br>
<span class="quotelev2">&gt;&gt; making it available is an enabler for bad practice that will creep in 
</span><br>
<span class="quotelev2">&gt;&gt; the codebase
</span><br>
<span class="quotelev2">&gt;&gt; 2. Remove OOB, Fix UDCM so it stops doing things it should not have 
</span><br>
<span class="quotelev2">&gt;&gt; done anyway. 
</span><br>
<span class="quotelev2">&gt;&gt; We settle for option 2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -== SM initialization ==- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some technical discussion on the way the shared segment is created and 
</span><br>
<span class="quotelev2">&gt;&gt; the sync mechanism for the shared file. There are a number of issues, 
</span><br>
<span class="quotelev2">&gt;&gt; that seem to benefit from the fact that the modex synchronize before 
</span><br>
<span class="quotelev2">&gt;&gt; we attempt the file access. There may be trouble if the modex is 
</span><br>
<span class="quotelev2">&gt;&gt; removed (or is not synchronizing).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -== Process name scalability ==-
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Process names use a lot of space.
</span><br>
<span class="quotelev2">&gt;&gt; Do we need the process information from everybody at all time ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modex vs opal_db. (need to clarify, I was doing something else)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Too many things are going into the modex/db. In many arch, we don't need
</span><br>
<span class="quotelev2">&gt;&gt; the hostname, or other info, because they can be derived. Some other
</span><br>
<span class="quotelev2">&gt;&gt; machines, the hostname has no meaning.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian: BTL should not have the hostname - at all - ? BTL should not 
</span><br>
<span class="quotelev2">&gt;&gt; report errors themselves, errors should go up and the BTL stay silent 
</span><br>
<span class="quotelev2">&gt;&gt; (also avoids some massive multinode error logs).
</span><br>
<span class="quotelev2">&gt;&gt; * error is reported upstack (no printf)
</span><br>
<span class="quotelev2">&gt;&gt; * Callback to get the error string later, when the pretty print happens
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** 
</span><br>
<span class="quotelev2">&gt;&gt; We need a temporary name during bootstrapping (before we get the OMPI 
</span><br>
<span class="quotelev2">&gt;&gt; names setup). Could be created from a 128bit hash, it should have low 
</span><br>
<span class="quotelev2">&gt;&gt; probability of collision, we can crash the job if we detect collision (?).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_name is some sort of proxy for orte_name. Everytime we use a
</span><br>
<span class="quotelev2">&gt;&gt; ompi_name, it gets converted to orte_name immediately after.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We also need an identifier to prevent random stuff to connect to us.
</span><br>
<span class="quotelev2">&gt;&gt; There is an issue in dynamic process, for names can still be unknown
</span><br>
<span class="quotelev2">&gt;&gt; yet. DPM is expensive and saved by a modex, we'll have a problem later 
</span><br>
<span class="quotelev2">&gt;&gt; on if we make it fast. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt; When does the BTL need a name first ? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_init, opal_init_util (from ompi_info)
</span><br>
<span class="quotelev2">&gt;&gt; add? opal_init_btl(name) + opal_fini_btl()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; During opal_init_btl:
</span><br>
<span class="quotelev2">&gt;&gt; * Btls register with the name
</span><br>
<span class="quotelev2">&gt;&gt; * Add their local info to the DB (opal_db)
</span><br>
<span class="quotelev2">&gt;&gt;   use a hashtable for storing name{ key=value ... }
</span><br>
<span class="quotelev2">&gt;&gt;   Align by 64bits the values, so that all keys are allocated (and sent) 
</span><br>
<span class="quotelev2">&gt;&gt;   in a single bulk. 
</span><br>
<span class="quotelev2">&gt;&gt; * Should some modex key appear as global shared, local shared, local, 
</span><br>
<span class="quotelev2">&gt;&gt;   (lazy propagated?)
</span><br>
<span class="quotelev2">&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -== BML ==-
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We should not care about it and not move it around. We are fine using 
</span><br>
<span class="quotelev2">&gt;&gt; BTL only, the BML offers little functionality. We'll try, but if it 
</span><br>
<span class="quotelev2">&gt;&gt; is hard we'll forget it. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Addprocs: Assumption that we have to call addprocs for each 
</span><br>
<span class="quotelev2">&gt;&gt; endpoint. Maybe we can change this so that addprocs is called only once. 
</span><br>
<span class="quotelev2">&gt;&gt; * If orte uses BTL, it will have to be called twice, that is sorry 
</span><br>
<span class="quotelev2">&gt;&gt; (or not ?). It can be postponed for when ORTE moves to BTL. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -== Active Message TAG numbers ==-
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; They have to move down too. The split in 32bits groups makes the tags 
</span><br>
<span class="quotelev2">&gt;&gt; sparse. We have a layer separation break here, but we may not want to 
</span><br>
<span class="quotelev2">&gt;&gt; have all PML_OB1 tags appear down in the OPAL. We'll put down the header
</span><br>
<span class="quotelev2">&gt;&gt; file, we don't change it for now (we are not overcrowded so its ok for 
</span><br>
<span class="quotelev2">&gt;&gt; it to be sparse). George will rearrange so that there are more possible 
</span><br>
<span class="quotelev2">&gt;&gt; families (at the expense of the number of possible tags per families).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -== Thread safety ==-
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Because BTL are now being used by top layers that we don't know what 
</span><br>
<span class="quotelev2">&gt;&gt; they are doing, we have to assume that threads are on (by default), 
</span><br>
<span class="quotelev2">&gt;&gt; leading to a bad performance hit, due to using opal_list_t that are 
</span><br>
<span class="quotelev2">&gt;&gt; locked deep inside. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What needs to be protected ? 
</span><br>
<span class="quotelev2">&gt;&gt; * per btl locking: huge cost on everything
</span><br>
<span class="quotelev2">&gt;&gt; * per endpoint locking? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's related to enabling async progress, but that is a big chunk of 
</span><br>
<span class="quotelev2">&gt;&gt; work. We just want to keep in mind that goal so that we don't make it 
</span><br>
<span class="quotelev2">&gt;&gt; worse than it already is. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do we want the ability to turn off/on thread safety at runtime ?
</span><br>
<span class="quotelev2">&gt;&gt; * lock, unlock, trylock:
</span><br>
<span class="quotelev2">&gt;&gt;   * accessors that are always safe
</span><br>
<span class="quotelev2">&gt;&gt;   * accessors that can be turned unsafe at runtime (only for OMPI level)
</span><br>
<span class="quotelev2">&gt;&gt; * swap, cmpswap, substract, add (32, 64bit atomics): no change (we already have both), but the CAPS move to OMPI 
</span><br>
<span class="quotelev2">&gt;&gt; * signal and condition variables
</span><br>
<span class="quotelev2">&gt;&gt;   * When, how do we call progress when needed if we remove the 
</span><br>
<span class="quotelev2">&gt;&gt;   UPPER_CASE that calls it ?
</span><br>
<span class="quotelev2">&gt;&gt;   * appears in wait, test, free_list
</span><br>
<span class="quotelev2">&gt;&gt; * We'll try to remove as many as we can (upper case locks) and see
</span><br>
<span class="quotelev2">&gt;&gt;  where we are in 4-5 months from now. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ===== OTHER issues found while talking =====
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * DPM is slow, it needs a speedup. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -== Error reporting / printf ==-
</span><br>
<span class="quotelev2">&gt;&gt; Replace all orte_show_help with opal_show_help. Make sure that the
</span><br>
<span class="quotelev2">&gt;&gt; symbol is not exposed anymore outside ORTE to force update.
</span><br>
<span class="quotelev2">&gt;&gt; * Orte_show_help, deduplicating happens in orte, ompi_show_help backcalls 
</span><br>
<span class="quotelev2">&gt;&gt; orte_show_help. Lets get rid of it completely. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12187.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Style question: // in C code"</a>
<li><strong>Previous message:</strong> <a href="12185.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<li><strong>In reply to:</strong> <a href="12185.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI BTL meeting in Knoxville"</a>
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
