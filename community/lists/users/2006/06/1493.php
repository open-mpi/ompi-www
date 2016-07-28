<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 17:18:23 2006" -->
<!-- isoreceived="20060628211823" -->
<!-- sent="Wed, 28 Jun 2006 17:18:13 -0400" -->
<!-- isosent="20060628211813" -->
<!-- name="Patrick Jessee" -->
<!-- email="pj_at_[hidden]" -->
<!-- subject="[OMPI users] error messages for btl components that aren't loaded" -->
<!-- id="44A2F215.1040404_at_fluent.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Patrick Jessee (<em>pj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 17:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Previous message:</strong> <a href="1492.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Maybe reply:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello. I'm getting some odd error messages in certain situations 
<br>
associated with the btl components (happens with both 1.0.2 and 1.1).  
<br>
When certain btl components are NOT loaded, openMPI issues error 
<br>
messages associated with those very components.  For instance, consider 
<br>
an application that is built with an openMPI installation that was 
<br>
configured with mvapi and mx (in addition to tcp,sm,self).   If that 
<br>
application is taken to a system that does not have mvapi and mx 
<br>
interconnects installed and is explicitly started for TCP by using 
<br>
&quot;--mca btl self,tcp,sm&quot;, then the following comes  from openMPI:
<br>
<p>[devi01:01659] mca: base: component_find: unable to open: libvapi.so: 
<br>
cannot open shared object file: No such file or directory (ignored)
<br>
[devi01:01659] mca: base: component_find: unable to open: libvapi.so: 
<br>
cannot open shared object file: No such file or directory (ignored)
<br>
[devi01:01659] mca: base: component_find: unable to open: 
<br>
libmyriexpress.so: cannot open shared object file: No such file or 
<br>
directory (ignored)
<br>
[devi02:31845] mca: base: component_find: unable to open: libvapi.so: 
<br>
cannot open shared object file: No such file or directory (ignored)
<br>
[devi02:31845] mca: base: component_find: unable to open: libvapi.so: 
<br>
cannot open shared object file: No such file or directory (ignored)
<br>
[devi02:31845] mca: base: component_find: unable to open: 
<br>
libmyriexpress.so: cannot open shared object file: No such file or 
<br>
directory (ignored)
<br>
<p>These are not fatal, but they definitely give the wrong impression that 
<br>
something is not right.  The &quot;--mca btl self,tcp,sm&quot; option should tell 
<br>
openMPI only to load loopback, tcp, and shared memory components (as 
<br>
these are the only btl components that should be operational on the 
<br>
system).   The mvapi and mx components (which need libvapi.so and 
<br>
libmyriexpress.so, respectively), should  not be loaded and thus 
<br>
libvapi.so and libmyriexpress.so should not be needed or even searched 
<br>
for.  The same thing happens with &quot;--mca btl ^mvapi,mx&quot;.  Interestingly, 
<br>
even on a system that does have MX, the libmyriexpress.so errors show up 
<br>
if the mx btl component is not loaded.
<br>
<p>Does anyone know (a) why openMPI is complaining about a shared library 
<br>
from a component that isn't even loaded, and (b) how to avoid the 
<br>
seemingly superfluous error messages?  Any help is greatly appreciated.
<br>
<p>-Patrick
<br>
<p><p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1494.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>Previous message:</strong> <a href="1492.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Maybe reply:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
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
