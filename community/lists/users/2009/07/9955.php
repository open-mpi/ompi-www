<?
$subject_val = "[OMPI users] Solution for dynamic loading with python";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 14:41:26 2009" -->
<!-- isoreceived="20090714184126" -->
<!-- sent="Tue, 14 Jul 2009 14:41:11 -0400" -->
<!-- isosent="20090714184111" -->
<!-- name="Evans, Thomas M." -->
<!-- email="evanstm_at_[hidden]" -->
<!-- subject="[OMPI users] Solution for dynamic loading with python" -->
<!-- id="C6824987.4D56%evanstm_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C682271C.4D47%evanstm_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Solution for dynamic loading with python<br>
<strong>From:</strong> Evans, Thomas M. (<em>evanstm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 14:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9956.php">Shaun Jackman: "[OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="9954.php">Ralph Castain: "[OMPI users] Fwd: Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Again, thanks to some other posts, I think I've found a reasonable, if not elegant, solution to the dlopen() issue with python and openmpi. Here is what I'm doing.  First I make a python binding to the following function in module mpi_dl.py:
<br>
<p>void mpi_dlopen()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void *handle;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;handle = dlopen(&quot;libmpi.so&quot;, RTLD_LAZY|RTLD_GLOBAL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dlclose(handle);
<br>
}
<br>
<p>I compile this into a python file called openmpi.py that has the binding and the python call, ie.:
<br>
<p>import _mpi_dlopen
<br>
# ... stuff for binding mpi_dlopen function
<br>
<p>mpi_dlopen()
<br>
<p>Then, in my python scripts (where I will load my other bindings, I do the following):
<br>
<p>import openmpi
<br>
<p>import my_other_modules
<br>
# .... go forth and conquer
<br>
<p>Actually, I include these lines at the very beginning of my my_other_modules so that users don't have to put this ugly code in their python scripts.  In other words, I'm doing what I was doing using python's dl package, but this is cross-platform (I hope).
<br>
<p>Tom
<br>
<p>On 7/14/09 12:07 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>(off list)
<br>
<p>Tom --
<br>
<p>I'm usually the guy who answers dynamic linker questions in the OMPI
<br>
community.
<br>
<p>Be aware that I'm on vacation this week and am only replying to you
<br>
under great personal risk to my person (if my wife catches me on work
<br>
mail, I'm hosed!! ;-) ).
<br>
<p>Hopefully, you can wait for a rely until next week, when I return and
<br>
dig out from the 6M+ emails that will surely have accrued while I was
<br>
gone...
<br>
<p><p><p>On Jul 14, 2009, at 10:48 AM, Evans, Thomas M. wrote:
<br>
<p><span class="quotelev1">&gt; Well, my previous solution has a major flaw, the python dl module is
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; available on AMD64.  So, I'm not really sure what to do except drop
</span><br>
<span class="quotelev1">&gt; support
</span><br>
<span class="quotelev1">&gt; for openmpi. Any ideas would be greatly appreciated.  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tom
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tom Evans
</span><br>
<span class="quotelev1">&gt; Radiation Transport and Shielding
</span><br>
<span class="quotelev1">&gt; Nuclear Science and Technology Division
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; (865) 576-3535     Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; (865) 574-9619 fax PO Box 2008 MS6172
</span><br>
<span class="quotelev1">&gt; evanstm_at_[hidden]   Oak Ridge, TN 37831-6170
</span><br>
<span class="quotelev1">&gt; www.ornl.gov/sci/radiation_transport_criticality
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
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
<p><p><pre>
--
Jeff Squyres
Cisco Systems
--
Tom Evans
Radiation Transport and Shielding
Nuclear Science and Technology Division
------------------------------------------------
(865) 576-3535     Oak Ridge National Laboratory
(865) 574-9619 fax PO Box 2008 MS6172
evanstm_at_[hidden]   Oak Ridge, TN 37831-6170
www.ornl.gov/sci/radiation_transport_criticality
------------------------------------------------
------ End of Forwarded Message
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9956.php">Shaun Jackman: "[OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="9954.php">Ralph Castain: "[OMPI users] Fwd: Open MPI v1.3.3 released"</a>
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
