<?
$subject_val = "Re: [OMPI users] Guaranteed run rank 0 on a given machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 12 14:28:03 2010" -->
<!-- isoreceived="20101212192803" -->
<!-- sent="Sun, 12 Dec 2010 20:27:57 +0100" -->
<!-- isosent="20101212192757" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Guaranteed run rank 0 on a given machine?" -->
<!-- id="AANLkTinejN8DJF4yo2a2731-_xj=ZnE8DLcwy_dz0P1e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D02AECB.9060206_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Guaranteed run rank 0 on a given machine?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-12 14:27:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15089.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In a similar situation i wrote a simple shell script &quot;rankcreate.sh&quot;
<br>
which creates a rank file assigning the various ranks to the correct
<br>
processors/slots when given a number of processes. In addition, this
<br>
script returns the name of this created rank file. I then use it like
<br>
this:
<br>
<p>mpirun -np 5 --rankfile `rankcreate.sh 5` myApplication
<br>
<p>May be this is of use for you
<br>
<p>jody
<br>
<p>On Fri, Dec 10, 2010 at 11:50 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; David Mathog wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, in my limited testing --host and -hostfile seem to be mutually
</span><br>
<span class="quotelev2">&gt;&gt; exclusive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; No. &#160;You can use both together. &#160;Indeed, the mpirun man page even has
</span><br>
<span class="quotelev1">&gt; examples of this (though personally, I don't see having a use for this). &#160;I
</span><br>
<span class="quotelev1">&gt; think the idea was you might use a hostfile to define the nodes in your
</span><br>
<span class="quotelev1">&gt; cluster and an mpirun command line that uses --host to select specific nodes
</span><br>
<span class="quotelev1">&gt; from the file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is reasonable, but it isn't clear that it is intended.
</span><br>
<span class="quotelev2">&gt;&gt; Example, with a hostfile containing one entry for &quot;monkey02.cluster
</span><br>
<span class="quotelev2">&gt;&gt; slots=1&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun &#160;--host monkey01 &#160; --mca plm_rsh_agent rsh &#160;hostname
</span><br>
<span class="quotelev2">&gt;&gt; monkey01.cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun &#160;--host monkey02 &#160; --mca plm_rsh_agent rsh &#160;hostname
</span><br>
<span class="quotelev2">&gt;&gt; monkey02.cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun &#160;-hostfile /usr/common/etc/openmpi.machines.test1 \
</span><br>
<span class="quotelev2">&gt;&gt; &#160;--mca plm_rsh_agent rsh &#160;hostname
</span><br>
<span class="quotelev2">&gt;&gt; monkey02.cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun &#160;--host monkey01 &#160;\
</span><br>
<span class="quotelev2">&gt;&gt; &#160;-hostfile /usr/commom/etc/openmpi.machines.test1 \
</span><br>
<span class="quotelev2">&gt;&gt; &#160;--mca plm_rsh_agent rsh &#160;hostname
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are no allocated resources for the application &#160;hostname
</span><br>
<span class="quotelev2">&gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev2">&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right. &#160;Your hostfile has monkey02. &#160;On the command line, you specify
</span><br>
<span class="quotelev1">&gt; monkey01, but that's not in your hostfile. &#160;That's a problem. &#160;Just like on
</span><br>
<span class="quotelev1">&gt; the mpirun man page.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15089.php">Alaukik Aggarwal: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>Previous message:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<li><strong>In reply to:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
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
