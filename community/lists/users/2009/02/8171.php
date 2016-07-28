<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 21:00:17 2009" -->
<!-- isoreceived="20090224020017" -->
<!-- sent="Mon, 23 Feb 2009 20:59:33 -0500" -->
<!-- isosent="20090224015933" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer" -->
<!-- id="7B8D51D3-96B5-4E1D-BCA9-73192357B55F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1233766998.11498.71.camel_at_hp-laptop" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 20:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8172.php">Ted Yu: "[OMPI users] installation of open-mpi"</a>
<li><strong>Previous message:</strong> <a href="8170.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="7967.php">Kiril Dichev: "[OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Reply:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Err... I'm a little confused.  We've been emailing about this exact  
<br>
issue for a week or two (off list); you just re-started the  
<br>
conversation from the beginning, moved it to the user's list, and  
<br>
dropped all the CC's (which include several people who are not on this  
<br>
list).  Why did you do that?
<br>
<p>Here's what I said in my last mail on that thread (just a few hours  
<br>
ago); it was in response to a mail from Thomas:
<br>
<p>I am totally confused by your explanation; you are throwing around  
<br>
terms like VampirServer, vgnd, driver, ... I don't know what these  
<br>
things are nor do I understand your explanation of how they relate to  
<br>
each other.  You seem to be using terms to define other terms that  
<br>
then are used to define the original terms.  This is where I get lost.
<br>
<p>Can you send a simple example that doesn't work, preferably outside of  
<br>
the whole Vampir system?  Perhaps something that effectively mimics  
<br>
Vampir's behavior?
<br>
<p><p><p>On Feb 4, 2009, at 12:03 PM, Kiril Dichev wrote:
<br>
<p><span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sorry for the long e-mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying for some time now to run VampirServer with shared
</span><br>
<span class="quotelev1">&gt; libs for Open MPI 1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all: The &quot;--enable-static --disable-shared&quot; version works.
</span><br>
<span class="quotelev1">&gt; Also, the 1.2 series worked fine with the shared libs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But here is the story for the shared libraries with OMPI 1.3:
</span><br>
<span class="quotelev1">&gt; Compilation of OMPI went fine and also the VampirServer guys compiled
</span><br>
<span class="quotelev1">&gt; the MPI driver they need against OMPI. The driver just refers to the
</span><br>
<span class="quotelev1">&gt; shared libraries of Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, on launching the server I got errors of the type &quot;undefined
</span><br>
<span class="quotelev1">&gt; symbol&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error: /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3- 
</span><br>
<span class="quotelev1">&gt; intel10.1-64bit-MT-shared/lib/openmpi/mca_paffinity_linux.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: mca_base_param_reg_int
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seemed to me that probably my LD_LIBRARY_PATH is not including
</span><br>
<span class="quotelev1">&gt; &lt;MPI_INSTALL&gt;/lib/openmpi , but I exported it and did &quot;mpirun -x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH ...&quot; and nothing changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, I started building any component complaining with &quot;undefined
</span><br>
<span class="quotelev1">&gt; symbol&quot; with &quot;--enable-mca-static&quot; - for example the above message
</span><br>
<span class="quotelev1">&gt; disappeared after I did --enable-mca-static paffinity. I don't know  
</span><br>
<span class="quotelev1">&gt; why
</span><br>
<span class="quotelev1">&gt; this worked, but it seemed to help. However, it was always replaced by
</span><br>
<span class="quotelev1">&gt; another error message of another component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After a few components another error came
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to
</span><br>
<span class="quotelev1">&gt; open /home_nfs/parma/x86_64/UNITE/packages/openmpi/1.3- 
</span><br>
<span class="quotelev1">&gt; intel10.1-64bit-MT-shared/lib/openmpi/mca_rml_oob: file not found  
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (full output attached)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I was unsure what to do, but again, when compiling the  
</span><br>
<span class="quotelev1">&gt; complaining
</span><br>
<span class="quotelev1">&gt; component statically, things went a step further. One thing that  
</span><br>
<span class="quotelev1">&gt; struck
</span><br>
<span class="quotelev1">&gt; me is that there is such a file with an extra &quot;.so&quot; at the end in the
</span><br>
<span class="quotelev1">&gt; directory -but maybe dlopen also accepts files without the &quot;.so&quot;, I
</span><br>
<span class="quotelev1">&gt; don't know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anywas, now I have included like 20 components statically and still
</span><br>
<span class="quotelev1">&gt; build shared objects for the OMPI libs and things seem to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any idea why these dozens of errors happen when  
</span><br>
<span class="quotelev1">&gt; loading
</span><br>
<span class="quotelev1">&gt; shared libs? Like I said, I never had this in 1.2 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Kiril
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpirun-vngd.out&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="8172.php">Ted Yu: "[OMPI users] installation of open-mpi"</a>
<li><strong>Previous message:</strong> <a href="8170.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="7967.php">Kiril Dichev: "[OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>Reply:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
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
