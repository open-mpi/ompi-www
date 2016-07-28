<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 07:24:25 2006" -->
<!-- isoreceived="20060630112425" -->
<!-- sent="Fri, 30 Jun 2006 07:24:16 -0400" -->
<!-- isosent="20060630112416" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error messages for btl components that aren't loaded" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9E83_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] error messages for btl components that aren't loaded" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-30 07:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1513.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1493.php">Patrick Jessee: "[OMPI users] error messages for btl components that aren't loaded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1517.php">Patrick Jessee: "Re: [OMPI users] error messages for btl components that aren't	loaded"</a>
<li><strong>Reply:</strong> <a href="1517.php">Patrick Jessee: "Re: [OMPI users] error messages for btl components that aren't	loaded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is due to the way the OMPI finds and loads modules.  What actually
<br>
happens is that OMPI looks for *all* modules of a given type and
<br>
dlopen's them.  It then applies the filter of which components are
<br>
desired and dlclose's all the undesired ones.  It certainly would be
<br>
better to apply the filter earlier and only open the desired modules.
<br>
<p>We actually identified this behavior quite a while ago, but never put a
<br>
high priority on fixing it because we didn't think it would be much of
<br>
an issue (because most people build/run in homogeneous environments).
<br>
But pending resource availability, I agree that this behavior is
<br>
sub-optimal and should be fixed.  I'll enter this issue on the bug
<br>
tracker so that we don't forget about it.  Can you -- and anyone else in
<br>
similar circumstances -- let me know how common this scenario is?
<br>
<p>There is one workaround, however.  The MCA parameter
<br>
mca_component_show_load_errors defaults to a &quot;1&quot; value.  When it's 1,
<br>
all warnings regarding the loading of components are displayed (i.e.,
<br>
the messages you're seeing).  Setting this value to 0 will disable the
<br>
messages.  However, you won't see *any* messages about components not
<br>
loading.  For example, if you have components that you think should be
<br>
loading but are not, you won't be notified. 
<br>
<p>That being said, these messages are not usually a concern for end-users,
<br>
however -- they are typically more useful for the OMPI developers.  For
<br>
example, if a developer accidentally does something to make a plugin
<br>
un-loadable (e.g., leaves a symbol out), having these messages displayed
<br>
at mpirun time can be *very* useful.  Plugins that are shipped in a
<br>
tarball hopefully do not suffer from such issues :-), and usually have
<br>
rpath information compiled in them so even LD_LIBRARY_PATH issues
<br>
shouldn't be much of a problem.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Patrick Jessee
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 28, 2006 5:18 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] error messages for btl components that 
</span><br>
<span class="quotelev1">&gt; aren't loaded
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello. I'm getting some odd error messages in certain situations 
</span><br>
<span class="quotelev1">&gt; associated with the btl components (happens with both 1.0.2 
</span><br>
<span class="quotelev1">&gt; and 1.1).  
</span><br>
<span class="quotelev1">&gt; When certain btl components are NOT loaded, openMPI issues error 
</span><br>
<span class="quotelev1">&gt; messages associated with those very components.  For 
</span><br>
<span class="quotelev1">&gt; instance, consider 
</span><br>
<span class="quotelev1">&gt; an application that is built with an openMPI installation that was 
</span><br>
<span class="quotelev1">&gt; configured with mvapi and mx (in addition to tcp,sm,self).   If that 
</span><br>
<span class="quotelev1">&gt; application is taken to a system that does not have mvapi and mx 
</span><br>
<span class="quotelev1">&gt; interconnects installed and is explicitly started for TCP by using 
</span><br>
<span class="quotelev1">&gt; &quot;--mca btl self,tcp,sm&quot;, then the following comes  from openMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [devi01:01659] mca: base: component_find: unable to open: libvapi.so: 
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [devi01:01659] mca: base: component_find: unable to open: libvapi.so: 
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [devi01:01659] mca: base: component_find: unable to open: 
</span><br>
<span class="quotelev1">&gt; libmyriexpress.so: cannot open shared object file: No such file or 
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; [devi02:31845] mca: base: component_find: unable to open: libvapi.so: 
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [devi02:31845] mca: base: component_find: unable to open: libvapi.so: 
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [devi02:31845] mca: base: component_find: unable to open: 
</span><br>
<span class="quotelev1">&gt; libmyriexpress.so: cannot open shared object file: No such file or 
</span><br>
<span class="quotelev1">&gt; directory (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are not fatal, but they definitely give the wrong 
</span><br>
<span class="quotelev1">&gt; impression that 
</span><br>
<span class="quotelev1">&gt; something is not right.  The &quot;--mca btl self,tcp,sm&quot; option 
</span><br>
<span class="quotelev1">&gt; should tell 
</span><br>
<span class="quotelev1">&gt; openMPI only to load loopback, tcp, and shared memory components (as 
</span><br>
<span class="quotelev1">&gt; these are the only btl components that should be operational on the 
</span><br>
<span class="quotelev1">&gt; system).   The mvapi and mx components (which need libvapi.so and 
</span><br>
<span class="quotelev1">&gt; libmyriexpress.so, respectively), should  not be loaded and thus 
</span><br>
<span class="quotelev1">&gt; libvapi.so and libmyriexpress.so should not be needed or even 
</span><br>
<span class="quotelev1">&gt; searched 
</span><br>
<span class="quotelev1">&gt; for.  The same thing happens with &quot;--mca btl ^mvapi,mx&quot;.  
</span><br>
<span class="quotelev1">&gt; Interestingly, 
</span><br>
<span class="quotelev1">&gt; even on a system that does have MX, the libmyriexpress.so 
</span><br>
<span class="quotelev1">&gt; errors show up 
</span><br>
<span class="quotelev1">&gt; if the mx btl component is not loaded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone know (a) why openMPI is complaining about a 
</span><br>
<span class="quotelev1">&gt; shared library 
</span><br>
<span class="quotelev1">&gt; from a component that isn't even loaded, and (b) how to avoid the 
</span><br>
<span class="quotelev1">&gt; seemingly superfluous error messages?  Any help is greatly 
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Patrick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1513.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1493.php">Patrick Jessee: "[OMPI users] error messages for btl components that aren't loaded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1517.php">Patrick Jessee: "Re: [OMPI users] error messages for btl components that aren't	loaded"</a>
<li><strong>Reply:</strong> <a href="1517.php">Patrick Jessee: "Re: [OMPI users] error messages for btl components that aren't	loaded"</a>
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
