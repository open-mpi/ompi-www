<?
$subject_val = "Re: [OMPI devel] Setting up debug environment on Eclipse PTP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 23:24:03 2014" -->
<!-- isoreceived="20141202042403" -->
<!-- sent="Tue, 2 Dec 2014 12:24:02 +0800" -->
<!-- isosent="20141202042402" -->
<!-- name="Alvyn Liang" -->
<!-- email="alvyn.liang_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting up debug environment on Eclipse PTP" -->
<!-- id="CALGdtq0QHvaDLDHnTPOMi4pzeVA3YUiXrGd+pfR0etL+wpp2bQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALGdtq36zjEo3h8uGPXxF7s7Wvs7r4dKDyd27kp1kCG7VuAsJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting up debug environment on Eclipse PTP<br>
<strong>From:</strong> Alvyn Liang (<em>alvyn.liang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 23:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16393.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16391.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16370.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Yes, Eclipse is currently being actively developed. To my understanding
<br>
<a href="https://www.eclipse.org/ptp/">https://www.eclipse.org/ptp/</a>
<br>
is also active. I did drop a question on Eclipse forum, but I got no
<br>
response. <a href="https://www.eclipse.org/forums/index.php/t/869298/">https://www.eclipse.org/forums/index.php/t/869298/</a>
<br>
<p>I am still looking for answers. Hopefully I will find an answer myself but
<br>
I still need hints from experienced ones. I am looking on a pages saying if
<br>
the source code exists I should add the code as the following page:
<br>
<p><a href="http://help.eclipse.org/juno/index.jsp?topic=%2Forg.eclipse.cdt.doc.user%2Fgetting_started%2Fcdt_w_import.htm">http://help.eclipse.org/juno/index.jsp?topic=%2Forg.eclipse.cdt.doc.user%2Fgetting_started%2Fcdt_w_import.htm</a>
<br>
<p>I am confused by things might be trivial for you. For instance,
<br>
Should I setup a MPI project or should I setup a normal C project? I have
<br>
this confusion because ompi project is itself a C project. If I setup a MPI
<br>
project, Eclipse will include its own tool chain. I am not quite sure if
<br>
there will be something funny prevented the debugging setup.
<br>
<p>I will keep digging myself but I appreciate any help. I would be good if
<br>
anyone of you could give a little guide of how to setup debug environment
<br>
or even in pure terminal mode. Any link or documentation will also welcome.
<br>
<p><p>Date: Fri, 28 Nov 2014 08:08:37 -0800
<br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Setting up debug environment on Eclipse PTP
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C0EDB9F2-060B-47D5-A8D3-3A6D5A952679_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I?m not sure we have any developers using PTP - have you tried asking this
</span><br>
<span class="quotelev1">&gt; question on the PTP mailing list, assuming that project still exists?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 27, 2014, at 7:38 PM, Alvyn Liang &lt;alvyn.liang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to learn how Open MPI works. Followed many instructions on
</span><br>
<span class="quotelev1">&gt; Web, I tried to setup MPI Hello projects on Eclipse PTP. I am wondering if
</span><br>
<span class="quotelev1">&gt; there is any protocol to setup such an environment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did try a few combination, but still stuck at the point where
</span><br>
<span class="quotelev1">&gt; sometimes there are:
</span><br>
<span class="quotelev2">&gt; &gt; 1. little bugs symbol showing on the left panel (next to the line
</span><br>
<span class="quotelev1">&gt; numbers) while debugging. Things like &quot;Symbol 'ompi_mpi_finalized' could
</span><br>
<span class="quotelev1">&gt; not be resolved&quot;. I think this is due to environmental variables or paths
</span><br>
<span class="quotelev1">&gt; not being set correctly, but I don't know what I have missed.
</span><br>
<span class="quotelev2">&gt; &gt; 2. Cannot toggle breakpoints or toggled breakpoints being set on a
</span><br>
<span class="quotelev1">&gt; relative file path. This makes the threads not stopping at the breakpoints.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My environment is CentOS 6.6 running on a machine with 32GB memory, and
</span><br>
<span class="quotelev1">&gt; Intel i7-3770. Since I am still experimenting on local debugging, I am
</span><br>
<span class="quotelev1">&gt; debugging on Generic Open MPI Interactive with connection type local or
</span><br>
<span class="quotelev1">&gt; remotely to 127.0.0.1, and with only a few processes. Detailed Eclipse
</span><br>
<span class="quotelev1">&gt; installation configuration attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My Open MPI is configured as
</span><br>
<span class="quotelev2">&gt; &gt; ../configure --enable-debug --enable-event-debug --enable-mem-debug
</span><br>
<span class="quotelev1">&gt; --enable-mem-profile
</span><br>
<span class="quotelev2">&gt; &gt; The compiler is GNU C compiler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This gives a lot of information in the console while debugging but not
</span><br>
<span class="quotelev1">&gt; very useful. I am not sure if I should run 'make install' for Open MPI to
</span><br>
<span class="quotelev1">&gt; /usr, or simply set Open MPI source tree as part of the project, or both.
</span><br>
<span class="quotelev1">&gt; Open MPI has examples folder but I don't know how to use the code directly
</span><br>
<span class="quotelev1">&gt; as my source code. For now I can step into source code of Open MPI, but
</span><br>
<span class="quotelev1">&gt; sometimes I cannot toggle breakpoints. Attached is my current debug
</span><br>
<span class="quotelev1">&gt; configuration.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Good day,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Alvyn
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16392/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16393.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16391.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16370.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
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
