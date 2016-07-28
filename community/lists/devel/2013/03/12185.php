<?
$subject_val = "[OMPI devel] Open MPI BTL meeting in Knoxville";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 10:33:14 2013" -->
<!-- isoreceived="20130305153314" -->
<!-- sent="Tue, 5 Mar 2013 15:33:08 +0000" -->
<!-- isosent="20130305153308" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI BTL meeting in Knoxville" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F6C669_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="60A8644A-3362-4EA1-BD72-454F70545DAC_at_icl.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI BTL meeting in Knoxville<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 10:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12186.php">George Bosilca: "Re: [OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<li><strong>Previous message:</strong> <a href="12184.php">Jeff Squyres (jsquyres): "[OMPI devel] Style question: // in C code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12186.php">George Bosilca: "Re: [OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<li><strong>Reply:</strong> <a href="12186.php">George Bosilca: "Re: [OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry it took so long to forward these notes to everyone.  Here's some notes from the BTL meeting we had in Knoxville a few weeks ago.
<br>
<p><span class="quotelev1">&gt; Date: 
</span><br>
<span class="quotelev1">&gt;    Feb. 12, 2013
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; People: 
</span><br>
<span class="quotelev1">&gt;    Thomas Herault
</span><br>
<span class="quotelev1">&gt;    George Bosilca
</span><br>
<span class="quotelev1">&gt;    Jeff Squyres
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Aurelien Bouteiller
</span><br>
<span class="quotelev1">&gt;    Ralf Castain
</span><br>
<span class="quotelev1">&gt;    Nathan Hjelmn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Goal: 
</span><br>
<span class="quotelev1">&gt;    Lay out the general design of moving the BTL framework into OPAL. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -== Identifying dependencies ==-    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTL
</span><br>
<span class="quotelev1">&gt; +------&gt; Modex
</span><br>
<span class="quotelev1">&gt; +------&gt; Mpool + rcache + conv
</span><br>
<span class="quotelev1">&gt; +------&gt; bml / allocators
</span><br>
<span class="quotelev1">&gt; +------&gt; Help/*
</span><br>
<span class="quotelev1">&gt; +------&gt; Naming + Endpoints?
</span><br>
<span class="quotelev1">&gt; +------&gt; (RML/OOB)
</span><br>
<span class="quotelev1">&gt; +------&gt; Threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==== ACTION PLAN ====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0. Remove Solaris Threads (--with-thread option is attached)
</span><br>
<span class="quotelev1">&gt; 1. Opal DB/modex
</span><br>
<span class="quotelev1">&gt; 1.b OpenIB UDCM independent from OOB
</span><br>
<span class="quotelev1">&gt; 2. Move BTL down to OPAL
</span><br>
<span class="quotelev1">&gt; 3. Move to locks to lowercase versions (that are always locking), look at perf.
</span><br>
<span class="quotelev1">&gt; 4. Look at conditions, atomics, etc
</span><br>
<span class="quotelev1">&gt; 4.5: add big locks on things that are maybe not thread safe and not performance critical
</span><br>
<span class="quotelev1">&gt; 5. Fix perf/redesign locking (in SM, in particular)
</span><br>
<span class="quotelev1">&gt; 6. Use BTL tcp in place of OOB in ORTE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==== DETAIL OF ISSUES ====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -== IB BTL boostrapping ==-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IB BTL is the only one that depends on OOB/RML
</span><br>
<span class="quotelev1">&gt; Options: 
</span><br>
<span class="quotelev1">&gt;  1. Use the TCP BTL to boostrap IB BTL. Brian doesn't like this, because
</span><br>
<span class="quotelev1">&gt;  making it available is an enabler for bad practice that will creep in 
</span><br>
<span class="quotelev1">&gt;  the codebase
</span><br>
<span class="quotelev1">&gt;  2. Remove OOB, Fix UDCM so it stops doing things it should not have 
</span><br>
<span class="quotelev1">&gt;  done anyway. 
</span><br>
<span class="quotelev1">&gt; We settle for option 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -== SM initialization ==- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some technical discussion on the way the shared segment is created and 
</span><br>
<span class="quotelev1">&gt; the sync mechanism for the shared file. There are a number of issues, 
</span><br>
<span class="quotelev1">&gt; that seem to benefit from the fact that the modex synchronize before 
</span><br>
<span class="quotelev1">&gt; we attempt the file access. There may be trouble if the modex is 
</span><br>
<span class="quotelev1">&gt; removed (or is not synchronizing).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -== Process name scalability ==-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process names use a lot of space.
</span><br>
<span class="quotelev1">&gt; Do we need the process information from everybody at all time ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modex vs opal_db. (need to clarify, I was doing something else)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Too many things are going into the modex/db. In many arch, we don't need
</span><br>
<span class="quotelev1">&gt; the hostname, or other info, because they can be derived. Some other
</span><br>
<span class="quotelev1">&gt; machines, the hostname has no meaning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian: BTL should not have the hostname - at all - ? BTL should not 
</span><br>
<span class="quotelev1">&gt; report errors themselves, errors should go up and the BTL stay silent 
</span><br>
<span class="quotelev1">&gt; (also avoids some massive multinode error logs).
</span><br>
<span class="quotelev1">&gt;  * error is reported upstack (no printf)
</span><br>
<span class="quotelev1">&gt;  * Callback to get the error string later, when the pretty print happens
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** 
</span><br>
<span class="quotelev1">&gt; We need a temporary name during bootstrapping (before we get the OMPI 
</span><br>
<span class="quotelev1">&gt; names setup). Could be created from a 128bit hash, it should have low 
</span><br>
<span class="quotelev1">&gt; probability of collision, we can crash the job if we detect collision (?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_name is some sort of proxy for orte_name. Everytime we use a
</span><br>
<span class="quotelev1">&gt; ompi_name, it gets converted to orte_name immediately after.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We also need an identifier to prevent random stuff to connect to us.
</span><br>
<span class="quotelev1">&gt; There is an issue in dynamic process, for names can still be unknown
</span><br>
<span class="quotelev1">&gt; yet. DPM is expensive and saved by a modex, we'll have a problem later 
</span><br>
<span class="quotelev1">&gt; on if we make it fast. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; When does the BTL need a name first ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_init, opal_init_util (from ompi_info)
</span><br>
<span class="quotelev1">&gt; add? opal_init_btl(name) + opal_fini_btl()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; During opal_init_btl:
</span><br>
<span class="quotelev1">&gt;  * Btls register with the name
</span><br>
<span class="quotelev1">&gt;  * Add their local info to the DB (opal_db)
</span><br>
<span class="quotelev1">&gt;    use a hashtable for storing name{ key=value ... }
</span><br>
<span class="quotelev1">&gt;    Align by 64bits the values, so that all keys are allocated (and sent) 
</span><br>
<span class="quotelev1">&gt;    in a single bulk. 
</span><br>
<span class="quotelev1">&gt;  * Should some modex key appear as global shared, local shared, local, 
</span><br>
<span class="quotelev1">&gt;    (lazy propagated?)
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -== BML ==-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We should not care about it and not move it around. We are fine using 
</span><br>
<span class="quotelev1">&gt; BTL only, the BML offers little functionality. We'll try, but if it 
</span><br>
<span class="quotelev1">&gt; is hard we'll forget it. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  * Addprocs: Assumption that we have to call addprocs for each 
</span><br>
<span class="quotelev1">&gt;  endpoint. Maybe we can change this so that addprocs is called only once. 
</span><br>
<span class="quotelev1">&gt;  * If orte uses BTL, it will have to be called twice, that is sorry 
</span><br>
<span class="quotelev1">&gt;  (or not ?). It can be postponed for when ORTE moves to BTL. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -== Active Message TAG numbers ==-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They have to move down too. The split in 32bits groups makes the tags 
</span><br>
<span class="quotelev1">&gt; sparse. We have a layer separation break here, but we may not want to 
</span><br>
<span class="quotelev1">&gt; have all PML_OB1 tags appear down in the OPAL. We'll put down the header
</span><br>
<span class="quotelev1">&gt; file, we don't change it for now (we are not overcrowded so its ok for 
</span><br>
<span class="quotelev1">&gt; it to be sparse). George will rearrange so that there are more possible 
</span><br>
<span class="quotelev1">&gt; families (at the expense of the number of possible tags per families).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -== Thread safety ==-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because BTL are now being used by top layers that we don't know what 
</span><br>
<span class="quotelev1">&gt; they are doing, we have to assume that threads are on (by default), 
</span><br>
<span class="quotelev1">&gt; leading to a bad performance hit, due to using opal_list_t that are 
</span><br>
<span class="quotelev1">&gt; locked deep inside. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What needs to be protected ? 
</span><br>
<span class="quotelev1">&gt;  * per btl locking: huge cost on everything
</span><br>
<span class="quotelev1">&gt;  * per endpoint locking? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's related to enabling async progress, but that is a big chunk of 
</span><br>
<span class="quotelev1">&gt; work. We just want to keep in mind that goal so that we don't make it 
</span><br>
<span class="quotelev1">&gt; worse than it already is. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we want the ability to turn off/on thread safety at runtime ?
</span><br>
<span class="quotelev1">&gt; * lock, unlock, trylock:
</span><br>
<span class="quotelev1">&gt;    * accessors that are always safe
</span><br>
<span class="quotelev1">&gt;    * accessors that can be turned unsafe at runtime (only for OMPI level)
</span><br>
<span class="quotelev1">&gt; * swap, cmpswap, substract, add (32, 64bit atomics): no change (we already have both), but the CAPS move to OMPI 
</span><br>
<span class="quotelev1">&gt; * signal and condition variables
</span><br>
<span class="quotelev1">&gt;    * When, how do we call progress when needed if we remove the 
</span><br>
<span class="quotelev1">&gt;    UPPER_CASE that calls it ?
</span><br>
<span class="quotelev1">&gt;    * appears in wait, test, free_list
</span><br>
<span class="quotelev1">&gt; * We'll try to remove as many as we can (upper case locks) and see
</span><br>
<span class="quotelev1">&gt;   where we are in 4-5 months from now. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===== OTHER issues found while talking =====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * DPM is slow, it needs a speedup. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -== Error reporting / printf ==-
</span><br>
<span class="quotelev1">&gt; Replace all orte_show_help with opal_show_help. Make sure that the
</span><br>
<span class="quotelev1">&gt; symbol is not exposed anymore outside ORTE to force update.
</span><br>
<span class="quotelev1">&gt; * Orte_show_help, deduplicating happens in orte, ompi_show_help backcalls 
</span><br>
<span class="quotelev1">&gt;  orte_show_help. Lets get rid of it completely. 
</span><br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12186.php">George Bosilca: "Re: [OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<li><strong>Previous message:</strong> <a href="12184.php">Jeff Squyres (jsquyres): "[OMPI devel] Style question: // in C code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12186.php">George Bosilca: "Re: [OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<li><strong>Reply:</strong> <a href="12186.php">George Bosilca: "Re: [OMPI devel] Open MPI BTL meeting in Knoxville"</a>
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
