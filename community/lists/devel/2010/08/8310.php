<?
$subject_val = "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 23 13:21:02 2010" -->
<!-- isoreceived="20100823172102" -->
<!-- sent="Mon, 23 Aug 2010 13:20:55 -0400" -->
<!-- isosent="20100823172055" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE" -->
<!-- id="7463D152-9100-49EA-BC30-39E5C5033FA2_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7080FEE04_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-23 13:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8311.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8309.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>In reply to:</strong> <a href="8308.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you configure with '--with-ft=cr' this enables the C/R fault tolerance frameworks, tools and code paths. One code path is the component selection logic you cited below. When you run an application compiled with Open MPI passing the '-am ft-enable-cr' or '-am ft-enable-cr-recovery' options this activates the logic below to pick only those components that have self identified as 'checkpoint ready'. 'checkpoint ready' means different things for different frameworks. Some frameworks do not need to do anything (e.g., timer), while others require much more work (e.g., BTLs).
<br>
<p>There are some components that have not been verified to work well under C/R scenarios, and they are not selected when you pass the '-am ' parameters cited above. The Shared Memory BTL -is- checkpoint ready, and -will- be selected (on the current 1.4, 1.5 and trunk branches).  See the code below (Line 94):
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/sm/btl_sm_component.c#L94">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/sm/btl_sm_component.c#L94</a>
<br>
<p>The shared memory collective module [also called 'sm'] (which is not enabled under normal use due to testing - Line 89 in coll_sm_component.c) is -not- checkpoint ready (line 77), also due to testing:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/coll/sm/coll_sm_component.c#L76">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/coll/sm/coll_sm_component.c#L76</a>
<br>
<p>So shared memory communication support has been available for checkpoint/restart functionality for a couple years now. The shared memory collective has not matured or been tested enough to be active even under non-C/R circumstances. Once it is ready, we can consider possibly trying to support it under C/R enabled activities.
<br>
<p>I hope that clarifies what is going on.
<br>
<p>-- Josh
<br>
<p>On Aug 23, 2010, at 12:50 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In the file &#147;mca_base_components_open.c&#148;, following code checks for the components that are checkpointable. If I configure OpenMPI library with &#147;&#151;enable-cr&#148; option, I was under the assumption that all components will be checkpointable. However I see that quite a few components are not checkpointable and that list includes &#147;Shared Memmory (sm)&#148;. Do I have to add any other options to &#147;configure&#148; command so that all components are checkpointable? Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  186            /*
</span><br>
<span class="quotelev1">&gt;  187             * If the user asked for a checkpoint enabled run
</span><br>
<span class="quotelev1">&gt;  188             * then only load checkpoint enabled components.
</span><br>
<span class="quotelev1">&gt;  189             */
</span><br>
<span class="quotelev1">&gt;  190            if( MCA_BASE_METADATA_PARAM_CHECKPOINT &amp; open_only_flags) {
</span><br>
<span class="quotelev1">&gt;  191                if( MCA_BASE_METADATA_PARAM_CHECKPOINT &amp; dummy-&gt;data.param_field) {
</span><br>
<span class="quotelev1">&gt;  192                    opal_output_verbose(10, output_id,
</span><br>
<span class="quotelev1">&gt;  193                                        &quot;mca: base: components_open: &quot;
</span><br>
<span class="quotelev1">&gt;  194                                        &quot;(%s) Component %s is Checkpointable&quot;,
</span><br>
<span class="quotelev1">&gt;  195                                        type_name,
</span><br>
<span class="quotelev1">&gt;  196                                        dummy-&gt;version.mca_component_name);
</span><br>
<span class="quotelev1">&gt;  197                }
</span><br>
<span class="quotelev1">&gt;  198                else {
</span><br>
<span class="quotelev1">&gt;  199                    opal_output_verbose(10, output_id,
</span><br>
<span class="quotelev1">&gt;  200                                        &quot;mca: base: components_open: &quot;
</span><br>
<span class="quotelev1">&gt;  201                                        &quot;(%s) Component %s is *NOT* Checkpointable - Disabled&quot;,
</span><br>
<span class="quotelev1">&gt;  202                                        type_name,
</span><br>
<span class="quotelev1">&gt;  203                                        dummy-&gt;version.mca_component_name);
</span><br>
<span class="quotelev1">&gt;  204                    opal_list_remove_item(&amp;components_found, item);
</span><br>
<span class="quotelev1">&gt;  205                }
</span><br>
<span class="quotelev1">&gt;  206            }
</span><br>
<span class="quotelev1">&gt;  207        }
</span><br>
<span class="quotelev1">&gt;  208    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ananda B Mudar, PMP
</span><br>
<span class="quotelev1">&gt; Senior Technical Architect
</span><br>
<span class="quotelev1">&gt; Wipro Technologies
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt;
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8311.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8309.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>In reply to:</strong> <a href="8308.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
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
