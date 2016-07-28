<?
$subject_val = "Re: [OMPI users] Python Binding problem with openmpi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 16:00:04 2009" -->
<!-- isoreceived="20090713200004" -->
<!-- sent="Mon, 13 Jul 2009 15:59:59 -0400" -->
<!-- isosent="20090713195959" -->
<!-- name="Neil Ludban" -->
<!-- email="nludban_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Python Binding problem with openmpi-1.3.2" -->
<!-- id="20090713155959.c040889e.nludban_at_osc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.11308.1247511110.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Python Binding problem with openmpi-1.3.2<br>
<strong>From:</strong> Neil Ludban (<em>nludban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-13 15:59:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9945.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI users] OpenMPI SCI support"</a>
<li><strong>Maybe in reply to:</strong> <a href="9939.php">Evans, Thomas M.: "[OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Mon, 13 Jul 2009 14:27:13 -0400
</span><br>
<span class="quotelev1">&gt; From: Rainer Keller &lt;keller_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Python Binding problem with openmpi-1.3.2
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: &quot;Evans, Thomas M.&quot; &lt;evanstm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;200907131427.13656.keller_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: Text/Plain; charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Tom,
</span><br>
<span class="quotelev1">&gt; as discussed, the following threads may help You?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/02/8158.php">http://www.open-mpi.org/community/lists/users/2009/02/8158.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#loading-libmpi-dynamically">http://www.open-mpi.org/faq/?category=running#loading-libmpi-dynamically</a>
</span><br>
<p>We ran into this a few months ago with the bcMPI interpreter bindings
<br>
and I forgot to post our code for possible inclusion in the FAQ.
<br>
(Having never used dlopen before, it took some trial and error to get
<br>
it to work right.)
<br>
<p>The C code below was put in a separate extension *not* linked against
<br>
MPI and called before any MPI extension functions.  Note we didn't
<br>
bother with a matching dlclose since the program is expected to exit,
<br>
this hasn't been a problem so far.
<br>
<p>#include &lt;dlfcn.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;void *handle;
<br>
&nbsp;&nbsp;&nbsp;handle = dlopen(&quot;libmpi.so&quot;, RTLD_LAZY|RTLD_GLOBAL);
<br>
&nbsp;&nbsp;&nbsp;if (handle == NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%s\n&quot;, dlerror());
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9945.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI users] OpenMPI SCI support"</a>
<li><strong>Maybe in reply to:</strong> <a href="9939.php">Evans, Thomas M.: "[OMPI users] Python Binding problem with openmpi-1.3.2"</a>
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
