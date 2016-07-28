<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 09:26:33 2006" -->
<!-- isoreceived="20060630132633" -->
<!-- sent="Fri, 30 Jun 2006 09:26:21 -0400" -->
<!-- isosent="20060630132621" -->
<!-- name="Patrick Jessee" -->
<!-- email="pj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error messages for btl components that aren't	loaded" -->
<!-- id="44A5267D.4050006_at_fluent.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9E83_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-30 09:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1518.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1516.php">Justin Bronder: "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>In reply to:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for the reply and your attention to this.
<br>
<p><span class="quotelev2">&gt;&gt;Can you -- and anyone else in
</span><br>
<span class="quotelev2">&gt;&gt;similar circumstances -- let me know how common this scenario is?
</span><br>
<p>I think this depends on the environment.  For us and many other ISVs, it 
<br>
is very common.  The build host is almost always physically different 
<br>
than the target systems, and the target systems usually only have a 
<br>
subset of the network hardware for which the application was originally 
<br>
configured (and may have drivers installed in different places).  The 
<br>
application will be configured for all possible interconnects.  On the 
<br>
individual target systems (each with possibly different interconnect 
<br>
types), the specific interconnect will be selected either by user input 
<br>
or by auto-detection.  Thus, we would build for mx, gm, mvapi, openib, 
<br>
tcp, sm, ...; however, some systems may have only mx or only mvapi or 
<br>
neither.
<br>
<p>The MCA of OpenMPI seems like it is very well suited for such a 
<br>
development environment because certain components can be selectively 
<br>
activated at run-time depending on the system.  Your idea of applying 
<br>
the filter earlier and only opening the desired modules sounds like an 
<br>
excellent approach.
<br>
<p>Thanks for considering the issue.   Please let me know if I can provide 
<br>
any more information.
<br>
<p>-Patrick
<br>
<p><p>Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt;This is due to the way the OMPI finds and loads modules.  What actually
</span><br>
<span class="quotelev1">&gt;happens is that OMPI looks for *all* modules of a given type and
</span><br>
<span class="quotelev1">&gt;dlopen's them.  It then applies the filter of which components are
</span><br>
<span class="quotelev1">&gt;desired and dlclose's all the undesired ones.  It certainly would be
</span><br>
<span class="quotelev1">&gt;better to apply the filter earlier and only open the desired modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We actually identified this behavior quite a while ago, but never put a
</span><br>
<span class="quotelev1">&gt;high priority on fixing it because we didn't think it would be much of
</span><br>
<span class="quotelev1">&gt;an issue (because most people build/run in homogeneous environments).
</span><br>
<span class="quotelev1">&gt;But pending resource availability, I agree that this behavior is
</span><br>
<span class="quotelev1">&gt;sub-optimal and should be fixed.  I'll enter this issue on the bug
</span><br>
<span class="quotelev1">&gt;tracker so that we don't forget about it.  Can you -- and anyone else in
</span><br>
<span class="quotelev1">&gt;similar circumstances -- let me know how common this scenario is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There is one workaround, however.  The MCA parameter
</span><br>
<span class="quotelev1">&gt;mca_component_show_load_errors defaults to a &quot;1&quot; value.  When it's 1,
</span><br>
<span class="quotelev1">&gt;all warnings regarding the loading of components are displayed (i.e.,
</span><br>
<span class="quotelev1">&gt;the messages you're seeing).  Setting this value to 0 will disable the
</span><br>
<span class="quotelev1">&gt;messages.  However, you won't see *any* messages about components not
</span><br>
<span class="quotelev1">&gt;loading.  For example, if you have components that you think should be
</span><br>
<span class="quotelev1">&gt;loading but are not, you won't be notified. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That being said, these messages are not usually a concern for end-users,
</span><br>
<span class="quotelev1">&gt;however -- they are typically more useful for the OMPI developers.  For
</span><br>
<span class="quotelev1">&gt;example, if a developer accidentally does something to make a plugin
</span><br>
<span class="quotelev1">&gt;un-loadable (e.g., leaves a symbol out), having these messages displayed
</span><br>
<span class="quotelev1">&gt;at mpirun time can be *very* useful.  Plugins that are shipped in a
</span><br>
<span class="quotelev1">&gt;tarball hopefully do not suffer from such issues :-), and usually have
</span><br>
<span class="quotelev1">&gt;rpath information compiled in them so even LD_LIBRARY_PATH issues
</span><br>
<span class="quotelev1">&gt;shouldn't be much of a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;[mailto:users-bounces_at_[hidden]] On Behalf Of Patrick Jessee
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Wednesday, June 28, 2006 5:18 PM
</span><br>
<span class="quotelev2">&gt;&gt;To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;Subject: [OMPI users] error messages for btl components that 
</span><br>
<span class="quotelev2">&gt;&gt;aren't loaded
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello. I'm getting some odd error messages in certain situations 
</span><br>
<span class="quotelev2">&gt;&gt;associated with the btl components (happens with both 1.0.2 
</span><br>
<span class="quotelev2">&gt;&gt;and 1.1).  
</span><br>
<span class="quotelev2">&gt;&gt;When certain btl components are NOT loaded, openMPI issues error 
</span><br>
<span class="quotelev2">&gt;&gt;messages associated with those very components.  For 
</span><br>
<span class="quotelev2">&gt;&gt;instance, consider 
</span><br>
<span class="quotelev2">&gt;&gt;an application that is built with an openMPI installation that was 
</span><br>
<span class="quotelev2">&gt;&gt;configured with mvapi and mx (in addition to tcp,sm,self).   If that 
</span><br>
<span class="quotelev2">&gt;&gt;application is taken to a system that does not have mvapi and mx 
</span><br>
<span class="quotelev2">&gt;&gt;interconnects installed and is explicitly started for TCP by using 
</span><br>
<span class="quotelev2">&gt;&gt;&quot;--mca btl self,tcp,sm&quot;, then the following comes  from openMPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[devi01:01659] mca: base: component_find: unable to open: libvapi.so: 
</span><br>
<span class="quotelev2">&gt;&gt;cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;[devi01:01659] mca: base: component_find: unable to open: libvapi.so: 
</span><br>
<span class="quotelev2">&gt;&gt;cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;[devi01:01659] mca: base: component_find: unable to open: 
</span><br>
<span class="quotelev2">&gt;&gt;libmyriexpress.so: cannot open shared object file: No such file or 
</span><br>
<span class="quotelev2">&gt;&gt;directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;[devi02:31845] mca: base: component_find: unable to open: libvapi.so: 
</span><br>
<span class="quotelev2">&gt;&gt;cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;[devi02:31845] mca: base: component_find: unable to open: libvapi.so: 
</span><br>
<span class="quotelev2">&gt;&gt;cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;[devi02:31845] mca: base: component_find: unable to open: 
</span><br>
<span class="quotelev2">&gt;&gt;libmyriexpress.so: cannot open shared object file: No such file or 
</span><br>
<span class="quotelev2">&gt;&gt;directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;These are not fatal, but they definitely give the wrong 
</span><br>
<span class="quotelev2">&gt;&gt;impression that 
</span><br>
<span class="quotelev2">&gt;&gt;something is not right.  The &quot;--mca btl self,tcp,sm&quot; option 
</span><br>
<span class="quotelev2">&gt;&gt;should tell 
</span><br>
<span class="quotelev2">&gt;&gt;openMPI only to load loopback, tcp, and shared memory components (as 
</span><br>
<span class="quotelev2">&gt;&gt;these are the only btl components that should be operational on the 
</span><br>
<span class="quotelev2">&gt;&gt;system).   The mvapi and mx components (which need libvapi.so and 
</span><br>
<span class="quotelev2">&gt;&gt;libmyriexpress.so, respectively), should  not be loaded and thus 
</span><br>
<span class="quotelev2">&gt;&gt;libvapi.so and libmyriexpress.so should not be needed or even 
</span><br>
<span class="quotelev2">&gt;&gt;searched 
</span><br>
<span class="quotelev2">&gt;&gt;for.  The same thing happens with &quot;--mca btl ^mvapi,mx&quot;.  
</span><br>
<span class="quotelev2">&gt;&gt;Interestingly, 
</span><br>
<span class="quotelev2">&gt;&gt;even on a system that does have MX, the libmyriexpress.so 
</span><br>
<span class="quotelev2">&gt;&gt;errors show up 
</span><br>
<span class="quotelev2">&gt;&gt;if the mx btl component is not loaded.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Does anyone know (a) why openMPI is complaining about a 
</span><br>
<span class="quotelev2">&gt;&gt;shared library 
</span><br>
<span class="quotelev2">&gt;&gt;from a component that isn't even loaded, and (b) how to avoid the 
</span><br>
<span class="quotelev2">&gt;&gt;seemingly superfluous error messages?  Any help is greatly 
</span><br>
<span class="quotelev2">&gt;&gt;appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1518.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1516.php">Justin Bronder: "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>In reply to:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
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
