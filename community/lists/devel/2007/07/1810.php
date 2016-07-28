<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 09:58:52 2007" -->
<!-- isoreceived="20070709135852" -->
<!-- sent="Mon, 09 Jul 2007 09:58:40 -0400" -->
<!-- isosent="20070709135840" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_output_verbose usage guidelines" -->
<!-- id="46923F10.3030408_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5BFA4D95-99DD-4BF3-847B-3ECFC3931C0B_at_cisco.com" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 09:58:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1811.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Previous message:</strong> <a href="1809.php">Jeff Squyres: "Re: [OMPI devel] One-sided operations with Portals"</a>
<li><strong>In reply to:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1811.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Reply:</strong> <a href="1811.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;On Jul 6, 2007, at 5:20 PM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Are there any guidelines about the use of opal_output_verbose?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Not so much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        - Are there hidden meanings for a given verbose level? e.g. 0
</span><br>
<span class="quotelev2">&gt;&gt;reserved for PML, or 50-100 for BTL and so on
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nope.  The output was designed to use the values with &gt;= kinds of  
</span><br>
<span class="quotelev1">&gt;checking; i.e., the higher the verbose value the user gives, the more  
</span><br>
<span class="quotelev1">&gt;output they see.  I.e., the values are not used in a &quot;bit flag&quot; sense  
</span><br>
<span class="quotelev1">&gt;(i.e., each bit enables/disables a specific set of output).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        - Maybe the base component output_id is ok to use in situation
</span><br>
<span class="quotelev2">&gt;&gt;XYZ but a component specific output_id should be used in situation  
</span><br>
<span class="quotelev2">&gt;&gt;ABC?
</span><br>
<span class="quotelev2">&gt;&gt;Or should never be used for component specific output?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I've typically used the base component output_id whenever possible.   
</span><br>
<span class="quotelev1">&gt;I usually started off having an output ID for a specific component,  
</span><br>
<span class="quotelev1">&gt;but usually that was for debugging (and therefore having oodles and  
</span><br>
<span class="quotelev1">&gt;oodles of output).  By the time I was done, I usually had only a few  
</span><br>
<span class="quotelev1">&gt;output statements and therefore used the base ID.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I guess my suggestion would be: if you're going to have a LOT of  
</span><br>
<span class="quotelev1">&gt;output, then make it a component-specific ID.  If it's a &quot;reasonable&quot;  
</span><br>
<span class="quotelev1">&gt;amount, then just use the base ID.  Definitions of those terms are  
</span><br>
<span class="quotelev1">&gt;subjective and intentionally fuzzy.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Why I ask.  I want to report a warning to the user when &quot;--enable- 
</span><br>
<span class="quotelev2">&gt;&gt;debug&quot;
</span><br>
<span class="quotelev2">&gt;&gt;is not configured. I also do not want the error to show up all the  
</span><br>
<span class="quotelev2">&gt;&gt;time,
</span><br>
<span class="quotelev2">&gt;&gt;only when for example --mca btl_base_debug is set to some value. I am
</span><br>
<span class="quotelev2">&gt;&gt;thinking I will just use opal_output_verbose but wanted to see if  
</span><br>
<span class="quotelev2">&gt;&gt;there
</span><br>
<span class="quotelev2">&gt;&gt;were any guidelines about its use? Or if I should be thinking about  
</span><br>
<span class="quotelev2">&gt;&gt;some
</span><br>
<span class="quotelev2">&gt;&gt;other option all together.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You want a warning to show when:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. the udapl btl is used
</span><br>
<span class="quotelev1">&gt;2. --enable-debug was not configured
</span><br>
<span class="quotelev1">&gt;3. the user specifies btl_*_verbose (or btl_*_debug) &gt;= some_value
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is that right?  If so, is the intent to warn that somen checks are  
</span><br>
<span class="quotelev1">&gt;not being performed that one would otherwise assume are being  
</span><br>
<span class="quotelev1">&gt;performed (because of #3)?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
#1 and #2 is just to convey the environment I expect the user to be 
<br>
running in, not the error case. Interpretation of #3 is a little askew. 
<br>
uDAPL gets its HCA information from  /etc/dat.conf. This file has an 
<br>
entry for each HCA, even those that are potentially not &quot;UP&quot;. Also it 
<br>
appears the OFED stack includes by default an entry for &quot;OpenIB-bond&quot; 
<br>
which I have not figured out what it is yet.  In anycase uDAPL has 
<br>
trouble distinguishing if an HCA is down intentionally or if is down 
<br>
because something is wrong. So the uDAPL BTL attempts to open all of the 
<br>
entries in this file. And the issues becomes how much information to 
<br>
toss back to the user. If a node has two IB interfaces but only one is 
<br>
up, do they want see a warning message about one of the interfaces being 
<br>
down when they already know this by looking at &quot;ifconfig&quot;?  I think not. 
<br>
But this could be valueable information if there is a real problem.
<br>
<p>Since its just one message at this point I think I will go with the base 
<br>
output_id and if I need more I will look to create a component specific 
<br>
id.  Thanks Jeff.
<br>
<p>I expect to pursue this in order to find a better way to distinguish 
<br>
between an interface that is up or down but I don't have a solution at 
<br>
the moment.
<br>
<p>-DON
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1811.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Previous message:</strong> <a href="1809.php">Jeff Squyres: "Re: [OMPI devel] One-sided operations with Portals"</a>
<li><strong>In reply to:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1811.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Reply:</strong> <a href="1811.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
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
