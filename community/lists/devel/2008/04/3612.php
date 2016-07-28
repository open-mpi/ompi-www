<?
$subject_val = "[OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 09:50:54 2008" -->
<!-- isoreceived="20080402135054" -->
<!-- sent="Wed, 2 Apr 2008 16:50:20 +0200" -->
<!-- isosent="20080402145020" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm135_at_[hidden]" -->
<!-- subject="[OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter" -->
<!-- id="00c801c894d0$e115a660$710519ac_at_voltaire.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter<br>
<strong>From:</strong> Sharon Melamed (<em>sharonm135_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 10:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3613.php">Josh Hursey: "Re: [OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="3611.php">Bernhard Fischer: "[OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3613.php">Josh Hursey: "Re: [OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
<li><strong>Reply:</strong> <a href="3613.php">Josh Hursey: "Re: [OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
From: devel-core-bounces_at_[hidden]
<br>
[mailto:devel-core-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Wednesday, April 02, 2008 3:44 PM
<br>
To: Open MPI Core Developers
<br>
Subject: Re: [devel-core] [RFC] Add an alias name to MCA parameter
<br>
<p>BTW, these mails can go across devel.
<br>
<p>devel-core is only for &quot;private&quot; stuff, like dialup phone numbers, etc.
<br>
<p><p><p>On Apr 2, 2008, at 9:34 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I agree that it would be beneficial to support an arbitrary number of
</span><br>
<span class="quotelev1">&gt; aliases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, some points about ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - say you register &quot;opal_paffinity_base_alone&quot;, and later register
</span><br>
<span class="quotelev1">&gt; &quot;mpi_paffinity_alone&quot; as an alias.  When you &quot;ompi_info --param mpi
</span><br>
<span class="quotelev1">&gt; all&quot;, the alias should still show up
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - aliases that are displayed through ompi_info's --param option should
</span><br>
<span class="quotelev1">&gt; somehow indicate that they are aliases, and show the &quot;real&quot; name as
</span><br>
<span class="quotelev1">&gt; well.  Perhaps something like this?  (just an idea)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;mpi_paffinity_alone&quot; (current
</span><br>
<span class="quotelev1">&gt; value: 1,
</span><br>
<span class="quotelev1">&gt;                           alias for: opal_paffinity_base_alone)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the
</span><br>
<span class="quotelev1">&gt; only (set of)
</span><br>
<span class="quotelev1">&gt;                           process(es) running on each node and bind
</span><br>
<span class="quotelev1">&gt; processes to
</span><br>
<span class="quotelev1">&gt;                           processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2008, at 8:37 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This sounds great. I have a couple questions though:
</span><br>
<span class="quotelev2">&gt;&gt; - Is there a patch for this that we can look at/test?
</span><br>
<span class="quotelev2">&gt;&gt; - Do you require that the parameter be registered before adding an
</span><br>
<span class="quotelev2">&gt;&gt; alias?
</span><br>
<span class="quotelev2">&gt;&gt; - Is the 'index' argument referencing the original MCA parameter, or
</span><br>
<span class="quotelev2">&gt;&gt; are aliases given individual 'index' values?
</span><br>
<span class="quotelev2">&gt;&gt; - Does this support more than one alias for a single MCA parameter?
</span><br>
<span class="quotelev2">&gt;&gt; If so then there should be a way to specify that in the remove
</span><br>
<span class="quotelev2">&gt;&gt; function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 2, 2008, at 9:22 AM, Sharon Melamed wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Add an alias name to MCA parameter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: There is a parameter that we need to register and use in OPAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (before ompi_init) but historically the parameter name is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_something_.... With the alias name we can register this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter in OPAL and call it opal_something_.... and then add an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alias name: ompi_something.. Now the user can use this parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with its real name or with its alias.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: in /opal/mca/base/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMOUT: Thursday - April, 10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DESCRIPTION:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Add two Interfaces to the MCA system:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_DECLSPEC int mca_base_param_add_alias (int index, const char*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aliase);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_DECLSPEC int mca_base_param_remove_alias (int index);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These functions could be called any where in the code after the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; registration of the MCA parameter. (mca_base_register)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This change includes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	. Adding a member to mca_base_param_t structure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	. Modifying the find functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	. Modifying ompi_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
devel-core mailing list
devel-core_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3613.php">Josh Hursey: "Re: [OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="3611.php">Bernhard Fischer: "[OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3613.php">Josh Hursey: "Re: [OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
<li><strong>Reply:</strong> <a href="3613.php">Josh Hursey: "Re: [OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
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
