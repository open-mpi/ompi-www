<?
$subject_val = "Re: [OMPI devel] problem when binding to socket on a single	socket	node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 11:07:21 2010" -->
<!-- isoreceived="20100412150721" -->
<!-- sent="Mon, 12 Apr 2010 16:56:35 +0200" -->
<!-- isosent="20100412145635" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem when binding to socket on a single	socket	node" -->
<!-- id="1271084195.2561.380.camel_at_frecb014522.frec.bull.fr" -->
<!-- inreplyto="F945A06A-A0AC-46C8-97AA-4CE23C25270F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem when binding to socket on a single	socket	node<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-12 10:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7734.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7732.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7730.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7740.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2010-04-12 at 07:50 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Guess I'll jump in here as I finally had a few minutes to look at the code and think about your original note. In fact, I believe your original statement is the source of contention.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If someone tells us -bind-to-socket, but there is only one socket, then we really cannot bind them to anything. Any check by their code would reveal that they had not, in fact, been bound - raising questions as to whether or not OMPI is performing the request. Our operating standard has been to error out if the user specifies something we cannot do to avoid that kind of confusion. This is what generated the code in the system today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I can see an argument that -bind-to-socket with one socket maybe shouldn't generate an error, but that decision then has to get reflected in other code areas as well.
</span><br>
<p>Actually, that was my original point: -bind-to-socket on a single socket
<br>
should IMHO lead to a noop, but not an error.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the test you cite -  it actually performs a valuable function and was added to catch specific scenarios. In particular, if you follow the code flow up just a little, you will see that it is possible to complete the loop without ever actually setting a bit in the mask. This happens when none of the cpus in that socket have been assigned to us via an external bind.
</span><br>
<p>This is exactly what I said, but may be I didn't express right:
<br>
&nbsp;&nbsp;. the test on orte_odls_globals.bound is true   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&gt; means we have an external bind
<br>
&nbsp;&nbsp;. call &lt;continue&gt; for all the cores in the socket.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&gt; none of the cpus on the socket belongs to our binding
<br>
<p>Regards,
<br>
<p><span class="quotelev1">&gt;  People actually use that as a means of suballocating nodes, so the test needs to be there. Again, if the user said &quot;bind to socket&quot;, but none of that socket's cores are assigned for our use, that is an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't looked at your specific fix, but I agree with Terry's question. It seems to me that whether or not we were externally bound is irrelevant. Even if the overall result is what you want, I think a more logically understandable test would help others reading the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But first we need to resolve the question: should this scenario return an error or not?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 12, 2010, at 1:43 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 2010-04-09 at 14:23 -0400, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph Castain wrote: 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Okay, just wanted to ensure everyone was working from the same base
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; code. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Terry, Brad: you might want to look this proposed change over.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Something doesn't quite look right to me, but I haven't really
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; walked through the code to check it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; At first blush I don't really get the usage of orte_odls_globals.bound
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in you patch.  It would seem to me that the insertion of that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; conditional would prevent the check it surrounds being done when the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; process has not been bounded prior to startup which is a common case.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well, if you have a look at the algo in the ORTE_BIND_TO_SOCKET path
</span><br>
<span class="quotelev2">&gt; &gt; (odls_default_fork_local_proc() in odls_default_module.c):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;set target_socket depending on the desired mapping&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;set my paffinity mask to 0&gt;       (line 715)
</span><br>
<span class="quotelev2">&gt; &gt; &lt;for each core in the socket&gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;get the associated phys_core&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;get the associated phys_cpu&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;if we are bound (orte_odls_globals.bound)&gt; {
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;if phys_cpu does not belong to the cpus I'm bound to&gt;
</span><br>
<span class="quotelev2">&gt; &gt;            continue
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    &lt;set phys-cpu bit in my affinity mask&gt;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; &lt;check if something is set in my affinity mask&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What I'm saying is that the only way to have nothing set in the affinity
</span><br>
<span class="quotelev2">&gt; &gt; mask (which would justify the last test) is to have never called the
</span><br>
<span class="quotelev2">&gt; &gt; &lt;set phys_cpu in my affinity mask&gt; instruction. This means:
</span><br>
<span class="quotelev2">&gt; &gt;  . the test on orte_odls_globals.bound is true
</span><br>
<span class="quotelev2">&gt; &gt;  . call &lt;continue&gt; for all the cores in the socket.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In the other path, what we are doing is checking if we have set one or
</span><br>
<span class="quotelev2">&gt; &gt; more bits in a mask after having actually set them: don't you think it's
</span><br>
<span class="quotelev2">&gt; &gt; useless?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That's why I'm suggesting to call the last check only if
</span><br>
<span class="quotelev2">&gt; &gt; orte_odls_globals.bound is true.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nadia
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --td
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Apr 9, 2010, at 9:33 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Nadia Derbey wrote: 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Fri, 2010-04-09 at 08:41 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Just to check: is this with the latest trunk? Brad and Terry have been making changes to this section of code, including modifying the PROCESS_IS_BOUND test...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Well, it was on the v1.5. But I just checked: looks like
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  1. the call to OPAL_PAFFINITY_PROCESS_IS_BOUND is still there in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     odls_default_fork_local_proc()
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  2. OPAL_PAFFINITY_PROCESS_IS_BOUND() is defined the same way
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; But, I'll give it a try with the latest trunk.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The changes, I've done do not touch
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND at all.  Also, I am only touching
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; code related to the &quot;bind-to-core&quot; option so I really doubt if my
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; changes are causing issues here.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Apr 9, 2010, at 3:39 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I am facing a problem with a test that runs fine on some nodes, and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; fails on others.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a heterogenous cluster, with 3 types of nodes:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1) Single socket , 4 cores
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2) 2 sockets, 4cores per socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 3) 2 sockets, 6 cores/socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I am using:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; . salloc to allocate the nodes,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; . mpirun binding/mapping options &quot;-bind-to-socket -bysocket&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; # salloc -N 1 mpirun -n 4 -bind-to-socket -bysocket sleep 900
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; This command fails if the allocated node is of type #1 (single socket/4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cpus).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; BTW, in that case orte_show_help is referencing a tag
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (&quot;could-not-bind-to-socket&quot;) that does not exist in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; help-odls-default.txt.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; While it succeeds when run on nodes of type #2 or 3.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I think a &quot;bind to socket&quot; should not return an error on a single socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; machine, but rather be a noop.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; The problem comes from the test
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; called in odls_default_fork_local_proc() after the binding to the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; processors socket has been done:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ========
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   OPAL_PAFFINITY_CPU_ZERO(mask);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   for (n=0; n &lt; orte_default_num_cores_per_socket; n++) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;       &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;       OPAL_PAFFINITY_CPU_SET(phys_cpu, mask);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   /* if we did not bind it anywhere, then that is an error */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   OPAL_PAFFINITY_PROCESS_IS_BOUND(mask, &amp;bound);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   if (!bound) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;       orte_show_help(&quot;help-odls-default.txt&quot;,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;                      &quot;odls-default:could-not-bind-to-socket&quot;, true);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;       ORTE_ODLS_ERROR_OUT(ORTE_ERR_FATAL);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ========
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND() will return true if there bits set in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the mask *AND* the number of bits set is lesser than the number of cpus
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; on the machine. Thus on a single socket, 4 cores machine the test will
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; fail. While on other the kinds of machines it will succeed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Again, I think the problem could be solved by changing the alogrithm,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; and assuming that ORTE_BIND_TO_SOCKET, on a single socket machine =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; noop.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Another solution could be to call the test
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; OPAL_PAFFINITY_PROCESS_IS_BOUND() at the end of the loop only if we are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; bound (orte_odls_globals.bound). Actually that is the only case where I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; see a justification to this test (see attached patch).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; And may be both solutions could be mixed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Nadia
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;001_fix_process_binding_test.patch&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ____________________________________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Oracle
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7734.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7732.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7730.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7740.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
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
