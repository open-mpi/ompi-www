<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 15:05:24 2014" -->
<!-- isoreceived="20140414190524" -->
<!-- sent="Mon, 14 Apr 2014 15:05:20 -0400" -->
<!-- isosent="20140414190520" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="5C44E42F-453E-4036-B365-E6611CF481DF_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1Kya8UDsKcGoAi6BYJ9-_f8Q65utNjZt=OgsSLWBNyiiqvQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 15:05:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14517.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14515.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14515.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14517.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1. This is very helpful info to have.
<br>
<p>Best,
<br>
Pavel (Pasha) Shamis
<br>
<p>On Apr 14, 2014, at 2:57 PM, Mike Dubman &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>
<p>sure, lets discuss it on the next telecon in 1w (Mellanox IL is OOO for holidays and Josh is on vacation).
<br>
<p>I think it is very good feature from enhancing OMPI usability point of view.
<br>
<p>See it as a programmable version of release notes, i.e.
<br>
<p>example:
<br>
<p>- In release notes vendors often specify that OpenMPI-SHMEM with PMI2 requires mxm 2.1, slurm 2.6.2+, libibverbs 2.2+, etc.
<br>
- The user/site/sysadmin can compile OpenMPI-SHMEM package with libibverbs 2.1, mxm 1.5 and slurm 2.6.1 which is perfectly valid and will work w/o any issues, but not certified by vendor because of some known issues with this mix.
<br>
<p>- vendor can provide script (or site admin can write one based on site local certification) to check with help of ompi_info,oshmem_info the current setup version which was compiled with OMPI and get a warning and save hassle of running into well-known issues.
<br>
<p>I think (+know) that many production environments and OMPI users will be happy to have it.
<br>
<p><p><p><p>On Mon, Apr 14, 2014 at 6:07 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Perhaps this is something best discussed on the weekly telecon? I think you are misunderstanding what I'm saying. I'm not heavily against it, but I still don't see the value, and dislike making disruptive changes that span the code base without first ensuring there is no other viable alternative.
<br>
<p>FWIW: Most libraries remain ABI compliant across major releases for exactly the reasons you cite. We don't actually support building against one library version and running against another for these very reasons - if users do that, it is at their own risk. Your change won't resolve that problem as ompi_info is just as likely to barf when confronted by that situation - remember, in order to register the component, ompi_info has to *load* it first. So any library incompatibility may well have already caused a problem.
<br>
<p><p>On Apr 14, 2014, at 7:59 AM, Mike Dubman &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>
<p>There is no correlation between built_with and running_with versions of external libraries supported by OMPI.
<br>
<p>The next release of external library does not mean we should remove code in ompi for all previous supported releases for the same library.
<br>
<p>vendor/site can certify slurm version 2.6.1 while latest is 2.6.6.
<br>
SLURM is not ABI compliant between releases, so site would like to know what is active version vs. certified to issue an early warning.
<br>
<p>Why are you so against it? I don`t see any issue with printing ext lib version number in the MCA description, something that can improve sysadmin/user-experience.
<br>
<p><p><p><p>On Mon, Apr 14, 2014 at 5:47 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>On Apr 14, 2014, at 7:34 AM, Mike Dubman &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>
<p>it is unrelated:
<br>
<p>1. The OMPI can support and built with many different (or all) versions of external library (for example: libmxm or libslurm).
<br>
<p>Not true - we do indeed check the library version in all cases where it matters. For example, the case you cite as your true story could easily have been prevented by using OMPI_CHECK_PACKAGE to verify that the libmxm had the required function in it
<br>
<p>2. The OMPI utility ompi_info can expose the currently available version of libmxm/libslurm.
<br>
<p>Yes - but what good does that do? Bottom line is that you shouldn't have built if that library version isn't supported
<br>
<p><p>3. The vendor or end-user wants to certify specific version of libmxm or libslurm to be used in the customer environment.
<br>
4. The current way - put a note into libmxm/libslurm Relase Notes, which is not a guarantee that site user/sysadmin will pay attention in production environment.
<br>
<p>Again, that's the whole purpose of the configure logic. You are supposed to check the library to ensure it is compatible, not just blindly build and then make the user figure it out
<br>
<p>5. The suggestion is to use #2 to write script by user or vendor which will match currently available versions with supported/certified and let admin/user know that there is a mismatch between running and supported version.
<br>
<p>Like I said, that's the developer's responsibility to get the configure logic correct - not the user's responsibility to figure it out after-the-fact.
<br>
<p><p>P.S. based on the true story :)
<br>
<p><p><p>On Mon, Apr 14, 2014 at 5:19 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
&lt;let's be consistent and shift this to the devel list&gt;
<br>
<p>I'm still confused - how is that helpful? How was the build allowed to complete if the external library version isn't supported?? You should either quietly not-build the affected component, or error out if the user specifically requested that component be built.
<br>
<p>This sounds to me like you have a weakness in your configure logic, and are trying to find a bandaid. Perhaps a better solution (that wouldn't cause us to change every component in the code base) would be to just add appropriate tests to your configure logic so you don't incorrectly build against an unsupported library?
<br>
<p><p>On Apr 14, 2014, at 7:12 AM, Mike Dubman &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>
<p>The use-case I`m interested to expose through ompi_info/oshmem_info the compiled-in versions of external libraries.
<br>
User/Vendor can write small script on top of ompi_info/oshmem_info to check if running version are in par with supported matrix.
<br>
<p><p>On Mon, Apr 14, 2014 at 5:06 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Guess I'm a little confused and trying to understand the issue, so let's consider a couple of cases:
<br>
<p>* If we are building against an unsupported version of an external library, that is supposed to be detected by the configure logic, yes?  So you would output a nice error message at that time, and stop the build process.
<br>
<p>* If we were built against one version of an external library, and someone attempts to run us against a different version, you'd have to detect that somehow at runtime. I'm not sure how you could reliably do that as the problem is likely to manifest itself as an unresolved function (i.e., we use something that doesn't exist in the version being used) or a difference in a function signature. Either way, you'll either fail to load the library or crash.
<br>
<p>So I'm not sure what the added function pointer actually accomplishes. I suppose you could use it during ompi_info to display something about what version you linked against, but that won't help solve either of the above problems.
<br>
<p>Could you help explain a little further?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Apr 14, 2014, at 5:57 AM, Mike Dubman &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>
<p>+devel mailing list (for web mail archive)
<br>
<p><p>On Sat, Apr 12, 2014 at 9:04 PM, Mike Dubman &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi,
<br>
<p>Could you please suggest if following is addressed in MCA architecture or maybe it is something we should add:
<br>
<p>Current MCA API:
<br>
The new MCA component should provide descriptor mca_base_component_2_0_0_t which specifies how to init/open/close/query/enable every new component.
<br>
Also, the descriptor is used to specify version of MCA framework and version of MCA component.
<br>
<p>What is missing:
<br>
Some MCA components are wrappers on top of external libraries, i.e.
<br>
<p>hwloc (libhwloc.so)
<br>
usnic (libusnic.so)
<br>
fca (libfca.so)
<br>
mxm (libmxm.so)
<br>
slurm (libslurn.so)
<br>
pbs
<br>
pmi
<br>
openib (libibverbs)
<br>
vader (knem, ...)
<br>
...
<br>
<p>So, it would be very useful if MCA descriptor will have another function pointer which return the version of external dependent library (if applicable).
<br>
The ompi_info and oshmem_info will print it if present and will allow sysadmin to track vendor specific dependencies for OMPI (like: mxm compiled with libmxm 2.1, usnic with libusnic v1.0, ...) and warn users if compiled versions do not match vendor recommended.
<br>
<p>Please suggest.
<br>
<p>Thanks
<br>
<p><p><p><p><p><p>_______________________________________________
<br>
devel-core mailing list
<br>
devel-core_at_[hidden]&lt;mailto:devel-core_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
<br>
<p><p>_______________________________________________
<br>
devel-core mailing list
<br>
devel-core_at_[hidden]&lt;mailto:devel-core_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
<br>
<p>_______________________________________________
<br>
devel-core mailing list
<br>
devel-core_at_[hidden]&lt;mailto:devel-core_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14507.php">http://www.open-mpi.org/community/lists/devel/2014/04/14507.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14508.php">http://www.open-mpi.org/community/lists/devel/2014/04/14508.php</a>
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14509.php">http://www.open-mpi.org/community/lists/devel/2014/04/14509.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14510.php">http://www.open-mpi.org/community/lists/devel/2014/04/14510.php</a>
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14511.php">http://www.open-mpi.org/community/lists/devel/2014/04/14511.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14515.php">http://www.open-mpi.org/community/lists/devel/2014/04/14515.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14517.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14515.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14515.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14517.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
