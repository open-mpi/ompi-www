<?
$subject_val = "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 14:17:45 2014" -->
<!-- isoreceived="20140808181745" -->
<!-- sent="Fri, 8 Aug 2014 14:17:42 -0400" -->
<!-- isosent="20140808181742" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc" -->
<!-- id="CAMJJpkUetcDZn=sxHbTJVQJ0zsnYbagGAArWEU_QXoWxBWSt8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="98659F56-2D3D-46B5-92E5-DCC67C5E7DA4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 14:17:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15565.php">George Bosilca: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on	Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="15551.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15568.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="15568.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 8, 2014 at 5:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry to chime in a little late. George is likely correct about using
</span><br>
<span class="quotelev1">&gt; ORTE_NAME, only you can't do that as the OPAL layer has no idea what that
</span><br>
<span class="quotelev1">&gt; datatype looks like. This was the original reason for creating the
</span><br>
<span class="quotelev1">&gt; opal_identifier_t type - I had no other choice when we moved the db
</span><br>
<span class="quotelev1">&gt; framework (now dstore) to the OPAL layer in anticipation of the BTLs moving
</span><br>
<span class="quotelev1">&gt; to OPAL. The abstraction requirement wouldn't allow me to pass down the
</span><br>
<span class="quotelev1">&gt; structure definition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We are talking about nidmap.c which has not yet been moved down to OPAL.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The easiest solution is probably to change the opal/db/hash code so that
</span><br>
<span class="quotelev1">&gt; 64-bit fields are memcpy'd instead of simply passed by &quot;=&quot;. This should
</span><br>
<span class="quotelev1">&gt; eliminate the problem with the least fuss.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a performance penalty for using non-aligned data, and ideally we
</span><br>
<span class="quotelev1">&gt; should use aligned data whenever possible. This code isn't in the critical
</span><br>
<span class="quotelev1">&gt; path and so this is less of an issue, but still would be nice to do.
</span><br>
<span class="quotelev1">&gt; However, I didn't do so for the following reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * I couldn't find a way for the compiler to check/require alignment down
</span><br>
<span class="quotelev1">&gt; in opal_db.store when passed a parameter. If someone knows of a way to do
</span><br>
<span class="quotelev1">&gt; that, please feel free to suggest it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * none of our current developers have access to a Solaris SPARC machine,
</span><br>
<span class="quotelev1">&gt; and thus our developers cannot detect violations when they occur
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * the current solution avoids the issue, albeit with a slight performance
</span><br>
<span class="quotelev1">&gt; penalty
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm open to alternative methods - I'm not happy with the ugliness this
</span><br>
<span class="quotelev1">&gt; required, but couldn't come up with a cleaner solution that would be easy
</span><br>
<span class="quotelev1">&gt; for developers to know when they violated the alignment requirement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: it is possible, I suppose, that the other discussion about using an
</span><br>
<span class="quotelev1">&gt; opal_process_name_t that exactly mirrors orte_process_name_t could also
</span><br>
<span class="quotelev1">&gt; resolve this problem in a cleaner fashion. I didn't impose that requirement
</span><br>
<span class="quotelev1">&gt; here, but maybe it's another motivator for doing so?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 7, 2014, at 11:46 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (one of the) faulty line was :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    if (ORTE_SUCCESS != (rc =
</span><br>
<span class="quotelev1">&gt; opal_db.store((opal_identifier_t*)ORTE_PROC_MY_NAME, OPAL_SCOPE_INTERNAL,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OPAL_DB_LOCALLDR, (opal_identifier_t*)&amp;proc, OPAL_ID_T))) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so if proc is not 64 bits aligned, a SIGBUS will occur on sparc.
</span><br>
<span class="quotelev1">&gt; as you pointed, replacing OPAL_ID_T with ORTE_NAME will very likely fix
</span><br>
<span class="quotelev1">&gt; the issue (i have no arch to test...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was initially also &quot;confused&quot; with the following line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (ORTE_SUCCESS != (rc = opal_db.store((opal_identifier_t*)&amp;proc,
</span><br>
<span class="quotelev1">&gt; OPAL_SCOPE_INTERNAL,
</span><br>
<span class="quotelev1">&gt;                                                 ORTE_DB_NPROC_OFFSET,
</span><br>
<span class="quotelev1">&gt; &amp;offset, OPAL_UINT32))) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the first argument of store is an (opal_identifier_t *)
</span><br>
<span class="quotelev1">&gt; strictly speaking this is &quot;a pointer to a 64 bits aligned address&quot;, and
</span><br>
<span class="quotelev1">&gt; proc might not be 64 bits aligned.
</span><br>
<span class="quotelev1">&gt; /* that being said, there is no crash :-) */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in this case, opal_db.store pointer points to the store function
</span><br>
<span class="quotelev1">&gt; (db_hash.c:178)
</span><br>
<span class="quotelev1">&gt; and proc is only used id memcpy at line 194, so 64 bits alignment is not
</span><br>
<span class="quotelev1">&gt; required.
</span><br>
<span class="quotelev1">&gt; (and comment is explicit : /* to protect alignment, copy the data across
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that might sounds pedantic, but are we doing the right thing here ?
</span><br>
<span class="quotelev1">&gt; (e.g. cast to (opal_identifier_t *), followed by a memcpy  in case the
</span><br>
<span class="quotelev1">&gt; pointer was not 64 bits aligned
</span><br>
<span class="quotelev1">&gt; vs always use aligned data ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/08/08 14:58, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a gigantic patch for an almost trivial issue. The current problem
</span><br>
<span class="quotelev1">&gt; is purely related to the fact that in a single location (nidmap.c) the
</span><br>
<span class="quotelev1">&gt; orte_process_name_t (which is a structure of 2 integers) is supposed to be
</span><br>
<span class="quotelev1">&gt; aligned based on the uint64_t requirements. Bad assumption!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the code one might notice that the orte_process_name_t is stored
</span><br>
<span class="quotelev1">&gt; using a particular DSS type OPAL_ID_T. This is a shortcut that doesn't hold
</span><br>
<span class="quotelev1">&gt; on the SPARC architecture because the two types (int32_t and int64_t) have
</span><br>
<span class="quotelev1">&gt; different alignments.  However, ORTE define a type for orte_process_name_t.
</span><br>
<span class="quotelev1">&gt; Thus, I think that if instead of saving the orte_process_name_t as an
</span><br>
<span class="quotelev1">&gt; OPAL_ID_T, we save it as an ORTE_NAME the issue will go away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 8, 2014 at 1:04 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Kawashima-san and all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is attached a one off patch for v1.8.
</span><br>
<span class="quotelev1">&gt; /* it does not use the __attribute__ modifier that might not be
</span><br>
<span class="quotelev1">&gt; supported by all compilers */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as far as i am concerned, the same issue is also in the trunk,
</span><br>
<span class="quotelev1">&gt; and if you do not hit it, it just means you are lucky :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the same issue might also be in other parts of the code :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/08/08 13:45, Kawashima, Takahiro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Gilles, George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is the one Gilles pointed.
</span><br>
<span class="quotelev1">&gt; I temporarily modified the code bellow and the bus error disappeared.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- orte/util/nidmap.c  (revision 32447)
</span><br>
<span class="quotelev1">&gt; +++ orte/util/nidmap.c  (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -885,7 +885,7 @@
</span><br>
<span class="quotelev1">&gt;      orte_proc_state_t state;
</span><br>
<span class="quotelev1">&gt;      orte_app_idx_t app_idx;
</span><br>
<span class="quotelev1">&gt;      int32_t restarts;
</span><br>
<span class="quotelev1">&gt; -    orte_process_name_t proc, dmn;
</span><br>
<span class="quotelev1">&gt; +    orte_process_name_t proc __attribute__((__aligned__(8))), dmn;
</span><br>
<span class="quotelev1">&gt;      char *hostname;
</span><br>
<span class="quotelev1">&gt;      uint8_t flag;
</span><br>
<span class="quotelev1">&gt;      opal_buffer_t *bptr;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Kawashima-san,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is interesting :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; proc is in the stack and has type orte_process_name_t
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef uint32_t orte_jobid_t;
</span><br>
<span class="quotelev1">&gt; typedef uint32_t orte_vpid_t;
</span><br>
<span class="quotelev1">&gt; struct orte_process_name_t {
</span><br>
<span class="quotelev1">&gt;     orte_jobid_t jobid;     /**&lt; Job number */
</span><br>
<span class="quotelev1">&gt;     orte_vpid_t vpid;       /**&lt; Process id - equivalent to rank */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; typedef struct orte_process_name_t orte_process_name_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so there is really no reason to align this on 8 bytes...
</span><br>
<span class="quotelev1">&gt; but later, proc is casted into an uint64_t ...
</span><br>
<span class="quotelev1">&gt; so proc should have been aligned on 8 bytes but it is too late,
</span><br>
<span class="quotelev1">&gt; and hence the glory SIGBUS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is loosely related to<a href="http://www.open-mpi.org/community/lists/devel/2014/08/15532.php">http://www.open-mpi.org/community/lists/devel/2014/08/15532.php</a>
</span><br>
<span class="quotelev1">&gt; (see heterogeneous.v2.patch)
</span><br>
<span class="quotelev1">&gt; if we make opal_process_name_t an union of uint64_t and a struct of two
</span><br>
<span class="quotelev1">&gt; uint32_t, the compiler
</span><br>
<span class="quotelev1">&gt; will align this on 8 bytes.
</span><br>
<span class="quotelev1">&gt; note the patch is not enough (and will not apply on the v1.8 branch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  anyway),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  we could simply remove orte_process_name_t and ompi_process_name_t and
</span><br>
<span class="quotelev1">&gt; use only
</span><br>
<span class="quotelev1">&gt; opal_process_name_t (and never declare variables with type
</span><br>
<span class="quotelev1">&gt; opal_proc_name_t otherwise alignment might be incorrect)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as a workaround, you can declare an opal_process_name_t (for alignment),
</span><br>
<span class="quotelev1">&gt; and cast it to an orte_process_name_t
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will write a patch (i will not be able to test on sparc ...)
</span><br>
<span class="quotelev1">&gt; please note this issue might be present in other places
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/08/08 13:03, Kawashima, Takahiro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I have installed openmpi-1.8.2rc2 with gcc-4.9.0 on Solaris
</span><br>
<span class="quotelev1">&gt; 10 Sparc and I receive a bus error, if I run a small program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I've finally reproduced the bus error in my SPARC environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0 0xffffffff00db4740 (__waitpid_nocancel + 0x44)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   (0x200,0x0,0x0,0xa0,0xfffff80100064af0,0x35b4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #1 0xffffffff0001a310 (handle_signal + 0x574) (signo=10,info=(struct
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   siginfo *) 0x000007feffffd100,p=(void *) 0x000007feffffd100) at line 277 in
</span><br>
<span class="quotelev1">&gt; ../sigattach.c &lt;SIGNAL HANDLER&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #2 0xffffffff0282aff4 (store + 0x540) (uid=(unsigned long *)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0xffffffff0118a128,scope=8:'\b',key=(char *) 0xffffffff0106a0a8
</span><br>
<span class="quotelev1">&gt; &quot;opal.local.ldr&quot;,data=(void *) 0x000007feffffde74,type=15:'\017') at line
</span><br>
<span class="quotelev1">&gt; 252 in db_hash.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #3 0xffffffff01266350 (opal_db_base_store + 0xc4) (proc=(unsigned long
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   *) 0xffffffff0118a128,scope=8:'\b',key=(char *) 0xffffffff0106a0a8
</span><br>
<span class="quotelev1">&gt; &quot;opal.local.ldr&quot;,object=(void *) 0x000007feffffde74,type=15:'\017') at line
</span><br>
<span class="quotelev1">&gt; 49 in db_base_fns.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #4 0xffffffff00fdbab4 (orte_util_decode_pidmap + 0x790) (bo=(struct *)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0x0000000000281d70) at line 975 in nidmap.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #5 0xffffffff00fd6d20 (orte_util_nidmap_init + 0x3dc) (buffer=(struct
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   opal_buffer_t *) 0x0000000000241fc0) at line 141 in nidmap.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #6 0xffffffff01e298cc (rte_init + 0x2a0) () at line 153 in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ess_env_module.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #7 0xffffffff00f9f28c (orte_init + 0x308) (pargc=(int *)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0x0000000000000000,pargv=(char ***) 0x0000000000000000,flags=32) at line
</span><br>
<span class="quotelev1">&gt; 148 in orte_init.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #8 0xffffffff001a6f08 (ompi_mpi_init + 0x31c) (argc=1,argv=(char **)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0x000007fefffff348,requested=0,provided=(int *) 0x000007feffffe698) at line
</span><br>
<span class="quotelev1">&gt; 464 in ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #9 0xffffffff001ff79c (MPI_Init + 0x2b0) (argc=(int *)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0x000007feffffe814,argv=(char ***) 0x000007feffffe818) at line 84 in init.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #10 0x0000000000100ae4 (main + 0x44) (argc=1,argv=(char **)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0x000007fefffff348) at line 8 in mpiinitfinalize.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #11 0xffffffff00d2b81c (__libc_start_main + 0x194)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   (0x100aa0,0x1,0x7fefffff348,0x100d24,0x100d14,0x0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #12 0x000000000010094c (_start + 0x2c) ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The line 252 in opal/mca/db/hash/db_hash.c is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     case OPAL_UINT64:
</span><br>
<span class="quotelev1">&gt;         if (NULL == data) {
</span><br>
<span class="quotelev1">&gt;             OPAL_ERROR_LOG(OPAL_ERR_BAD_PARAM);
</span><br>
<span class="quotelev1">&gt;             return OPAL_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         kv-&gt;type = OPAL_UINT64;
</span><br>
<span class="quotelev1">&gt;         kv-&gt;data.uint64 = *(uint64_t*)(data); // !!! here !!!
</span><br>
<span class="quotelev1">&gt;         break;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My environment is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Open MPI v1.8 branch r32447 (latest)
</span><br>
<span class="quotelev1">&gt;   configure --enable-debug
</span><br>
<span class="quotelev1">&gt;   SPARC-V9 (Fujitsu SPARC64 IXfx)
</span><br>
<span class="quotelev1">&gt;   Linux (custom)
</span><br>
<span class="quotelev1">&gt;   gcc 4.2.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could not reproduce it with Open MPI trunk nor with Fujitsu compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can this information help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry once more to answer late, but the last two days our mail
</span><br>
<span class="quotelev1">&gt; server was down (hardware error).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Did you configure this --enable-debug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Yes, I used the following command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.8.2rc3/configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   --prefix=/usr/local/openmpi-1.8.2_64_gcc \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --libdir=/usr/local/openmpi-1.8.2_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.9.0/lib/amd64&quot; \
</span><br>
<span class="quotelev1">&gt;   CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;   --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If so, you should get a line number in the backtrace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I got them for gdb (see below), but not for &quot;dbx&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Aug 5, 2014, at 2:59 AM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;Siegmar.Gross_at_[hidden]&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry to answer so late, but last week I didn't have Internet
</span><br>
<span class="quotelev1">&gt; access. In the meantime I've installed openmpi-1.8.2rc3 and I get
</span><br>
<span class="quotelev1">&gt; the same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This looks like the typical type of alignment error that we used
</span><br>
<span class="quotelev1">&gt; to see when testing regularly on SPARC.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the error was happening in mca_db_hash.so.  Could
</span><br>
<span class="quotelev1">&gt; you get a stack trace / file+line number where it was failing
</span><br>
<span class="quotelev1">&gt; in mca_db_hash?  (i.e., the actual bad code will likely be under
</span><br>
<span class="quotelev1">&gt; opal/mca/db/hash somewhere)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Unfortunately I don't get a file+line number from a file in
</span><br>
<span class="quotelev1">&gt; opal/mca/db/Hash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr small_prog 102 ompi_info | grep MPI:
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.8.2rc3
</span><br>
<span class="quotelev1">&gt; tyr small_prog 103 which mpicc
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.2_64_gcc/bin/mpicc
</span><br>
<span class="quotelev1">&gt; tyr small_prog 104 mpicc init_finalize.c
</span><br>
<span class="quotelev1">&gt; tyr small_prog 106 /opt/solstudio12.3/bin/sparcv9/dbx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  For information about new features see `help changes'
</span><br>
<span class="quotelev1">&gt; To remove this message, put `dbxenv suppress_startup_message 7.9'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    in your
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   .dbxrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Reading mpiexec
</span><br>
<span class="quotelev1">&gt; Reading ld.so.1
</span><br>
<span class="quotelev1">&gt; Reading libopen-rte.so.7.0.4
</span><br>
<span class="quotelev1">&gt; Reading libopen-pal.so.6.2.0
</span><br>
<span class="quotelev1">&gt; Reading libsendfile.so.1
</span><br>
<span class="quotelev1">&gt; Reading libpicl.so.1
</span><br>
<span class="quotelev1">&gt; Reading libkstat.so.1
</span><br>
<span class="quotelev1">&gt; Reading liblgrp.so.1
</span><br>
<span class="quotelev1">&gt; Reading libsocket.so.1
</span><br>
<span class="quotelev1">&gt; Reading libnsl.so.1
</span><br>
<span class="quotelev1">&gt; Reading libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; Reading librt.so.1
</span><br>
<span class="quotelev1">&gt; Reading libm.so.2
</span><br>
<span class="quotelev1">&gt; Reading libpthread.so.1
</span><br>
<span class="quotelev1">&gt; Reading libc.so.1
</span><br>
<span class="quotelev1">&gt; Reading libdoor.so.1
</span><br>
<span class="quotelev1">&gt; Reading libaio.so.1
</span><br>
<span class="quotelev1">&gt; Reading libmd.so.1
</span><br>
<span class="quotelev1">&gt; (dbx) check -all
</span><br>
<span class="quotelev1">&gt; access checking - ON
</span><br>
<span class="quotelev1">&gt; memuse checking - ON
</span><br>
<span class="quotelev1">&gt; (dbx) run -np 1 a.outRunning: mpiexec -np 1 a.out
</span><br>
<span class="quotelev1">&gt; (process id 27833)
</span><br>
<span class="quotelev1">&gt; Reading rtcapihook.so
</span><br>
<span class="quotelev1">&gt; Reading libdl.so.1
</span><br>
<span class="quotelev1">&gt; Reading rtcaudit.so
</span><br>
<span class="quotelev1">&gt; Reading libmapmalloc.so.1
</span><br>
<span class="quotelev1">&gt; Reading libgen.so.1
</span><br>
<span class="quotelev1">&gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev1">&gt; Reading rtcboot.so
</span><br>
<span class="quotelev1">&gt; Reading librtc.so
</span><br>
<span class="quotelev1">&gt; Reading libmd_psr.so.1
</span><br>
<span class="quotelev1">&gt; RTC: Enabling Error Checking...
</span><br>
<span class="quotelev1">&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev1">&gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff55174da0
</span><br>
<span class="quotelev1">&gt; 0xffffffff55174da0: _readdir+0x0064:    call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff55342a80
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (dbx) where
</span><br>
<span class="quotelev1">&gt; current thread: t_at_1
</span><br>
<span class="quotelev1">&gt; =&gt;[1] _readdir(0xffffffff79f00300, 0x2e6800, 0x4, 0x2d, 0x4,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0xffffffff79f00300), at 0xffffffff55174da0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [2] list_files_by_dir(0x100138fd8, 0xffffffff7fffd1f0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    0xffffffff7fffd1e8,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0xffffffff7fffd210, 0x0, 0xffffffff702a0010), at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0xffffffff63174594
</span><br>
<span class="quotelev1">&gt;  [3] foreachfile_callback(0x100138fd8, 0xffffffff7fffd458, 0x0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    0x2e, 0x0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0xffffffff702a0010), at 0xffffffff6317461c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [4] foreach_dirinpath(0x1001d8a28, 0x0, 0xffffffff631745e0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0xffffffff7fffd458, 0x0, 0xffffffff702a0010), at 0xffffffff63171684
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [5] lt_dlforeachfile(0x1001d8a28, 0xffffffff6319656c, 0x0, 0x53,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    0x2f,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0xf), at 0xffffffff63174748
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [6] find_dyn_components(0x0, 0xffffffff6323b570, 0x0, 0x1,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0xffffffff7fffd6a0, 0xffffffff702a0010), at 0xffffffff63195e38
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [7] mca_base_component_find(0x0, 0xffffffff6323b570,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    0xffffffff6335e1b0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0x0, 0xffffffff7fffd6a0, 0x1), at 0xffffffff631954d8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [8] mca_base_framework_components_register(0xffffffff6335e1c0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    0x0, 0x3e,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0x0, 0x3b, 0x100800), at 0xffffffff631b1638
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [9] mca_base_framework_register(0xffffffff6335e1c0, 0x0, 0x2,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0xffffffff7fffd8d0, 0x0, 0xffffffff702a0010), at 0xffffffff631b24d4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [10] mca_base_framework_open(0xffffffff6335e1c0, 0x0, 0x2,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0xffffffff7fffd990, 0x0, 0xffffffff702a0010), at 0xffffffff631b25d0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [11] opal_init(0xffffffff7fffdd70, 0xffffffff7fffdd78, 0x100117c60,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0xffffffff7fffde58, 0x400, 0x100117c60), at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0xffffffff63153694
</span><br>
<span class="quotelev1">&gt;  [12] orterun(0x4, 0xffffffff7fffde58, 0x2, 0xffffffff7fffdda0, 0x0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0xffffffff702a0010), at 0x100005078
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [13] main(0x4, 0xffffffff7fffde58, 0xffffffff7fffde80, 0x100117c60,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0x100000000, 0xffffffff6a700200), at 0x100003d68
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (dbx)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following output with gdb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr small_prog 107 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    copying&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/bin/orterun...done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (gdb) run -np 1 a.out
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; [tyr:27867] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:27867] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:27867] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:27867] Failing at address: ffffffff7fffd224
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   acktrace_print+0x2c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3e
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   e8 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   b_base_store+0xc8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   til_decode_pidmap+0x798
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   til_nidmap_init+0x3cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   6c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_i
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   nit+0x308
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   it+0x31c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:PMPI_Init+0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   x2a8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:_start+0x7c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    [tyr:27867] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpiexec noticed that process rank 0 with PID 27867 on node tyr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    exited on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   signal 10 (Bus Error).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    [LWP    2         exited]
</span><br>
<span class="quotelev1">&gt; [New Thread 2        ]
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    found to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   satisfy query
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #4  0xffffffff7f624574 in remove_hdl () from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #5  0xffffffff7f61d97c in dlclose_core () from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #6  0xffffffff7f61d9d4 in dlclose_intn () from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #8  0xffffffff7ec7746c in vm_close ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #9  0xffffffff7ec74a4c in lt_dlclose ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #10 0xffffffff7ec99b70 in ri_destructor (obj=0x1001ead30)
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_component_repository.c:391
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #11 0xffffffff7ec98488 in opal_obj_run_destructors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    (object=0x1001ead30)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       at ../../../../openmpi-1.8.2rc3/opal/class/opal_object.h:446
</span><br>
<span class="quotelev1">&gt; #12 0xffffffff7ec993ec in mca_base_component_repository_release (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b023cf0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_component_repository.c:244
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #13 0xffffffff7ec9b734 in mca_base_component_unload (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b023cf0 &lt;mca_oob_tcp_component&gt;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    output_id=-1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #14 0xffffffff7ec9b7c8 in mca_base_component_close (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b023cf0 &lt;mca_oob_tcp_component&gt;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    output_id=-1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #15 0xffffffff7ec9b89c in mca_base_components_close (output_id=-1,
</span><br>
<span class="quotelev1">&gt;    components=0xffffffff7f12b430 &lt;orte_oob_base_framework+80&gt;,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    skip=0x0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #16 0xffffffff7ec9b804 in mca_base_framework_components_close (
</span><br>
<span class="quotelev1">&gt;    framework=0xffffffff7f12b3e0 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #17 0xffffffff7efae1e4 in orte_oob_base_close ()
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ../../../../openmpi-1.8.2rc3/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #18 0xffffffff7ecb28ac in mca_base_framework_close (
</span><br>
<span class="quotelev1">&gt;    framework=0xffffffff7f12b3e0 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #19 0xffffffff7bf078c0 in rte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ../../../../../openmpi-1.8.2rc3/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #20 0xffffffff7ef30a44 in orte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at ../../openmpi-1.8.2rc3/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev1">&gt; #21 0x00000001000070c4 in orterun (argc=4, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2rc3/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev1">&gt; #22 0x0000000100003d70 in main (argc=4, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2rc3/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the above information helpful to track down the error? Do you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    need
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    anything else? Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<span class="quotelev1">&gt;  On Jul 25, 2014, at 2:08 AM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   &lt;Siegmar.Gross_at_[hidden]&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi-1.8.2rc2 with gcc-4.9.0 on Solaris
</span><br>
<span class="quotelev1">&gt; 10 Sparc and I receive a bus error, if I run a small program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr hello_1 105 mpiexec -np 2 a.out
</span><br>
<span class="quotelev1">&gt; [tyr:29164] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:29164] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:29164] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:29164] Failing at address: ffffffff7fffd1c4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   acktrace_print+0x2c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3e
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   e8 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   b_base_store+0xc8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   til_decode_pidmap+0x798
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   til_nidmap_init+0x3cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   6c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_i
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   nit+0x308
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   it+0x31c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:PMPI_Init+0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   x2a8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        /home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:main+0x20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          /home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:_start+0x7c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [tyr:29164] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following output if I run the program in &quot;dbx&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; RTC: Enabling Error Checking...
</span><br>
<span class="quotelev1">&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev1">&gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff55174da0
</span><br>
<span class="quotelev1">&gt; 0xffffffff55174da0: _readdir+0x0064:    call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff55342a80
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   (dbx)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully the above output helps to fix the error. Can I provide
</span><br>
<span class="quotelev1">&gt; anything else? Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15546.php">http://www.open-mpi.org/community/lists/devel/2014/08/15546.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/08/15547.php">http://www.open-mpi.org/community/lists/devel/2014/08/15547.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15549.php">http://www.open-mpi.org/community/lists/devel/2014/08/15549.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15550.php">http://www.open-mpi.org/community/lists/devel/2014/08/15550.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15551.php">http://www.open-mpi.org/community/lists/devel/2014/08/15551.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15565.php">George Bosilca: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on	Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="15551.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15568.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="15568.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
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
