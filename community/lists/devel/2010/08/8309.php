<?
$subject_val = "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 23 13:09:48 2010" -->
<!-- isoreceived="20100823170948" -->
<!-- sent="Mon, 23 Aug 2010 10:09:17 -0700" -->
<!-- isosent="20100823170917" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E7080FEE3C_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE" -->
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
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Question%20on%20MCA_BASE_METADATA_PARAM_NONE"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-23 13:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8310.php">Joshua Hursey: "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>Previous message:</strong> <a href="8308.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>Maybe in reply to:</strong> <a href="8308.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8310.php">Joshua Hursey: "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a typo in my previous posting. I have configured OpenMPI
<br>
library with &quot;-with-ft=cr&quot;.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>From: Ananda Babu Mudar (WT01 - Energy and Utilities) 
<br>
Sent: Monday, August 23, 2010 11:50 AM
<br>
To: 'devel_at_[hidden]'
<br>
Subject: Question on MCA_BASE_METADATA_PARAM_NONE
<br>
<p>&nbsp;
<br>
<p>Hi
<br>
&nbsp;
<br>
In the file &quot;mca_base_components_open.c&quot;, following code checks for the
<br>
components that are checkpointable. If I configure OpenMPI library with
<br>
&quot;-enable-cr&quot; option, I was under the assumption that all components will
<br>
be checkpointable. However I see that quite a few components are not
<br>
checkpointable and that list includes &quot;Shared Memmory (sm)&quot;. Do I have
<br>
to add any other options to &quot;configure&quot; command so that all components
<br>
are checkpointable? Thanks
<br>
&nbsp;
<br>
&nbsp;186
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L186&gt;             /*
<br>
&nbsp;187
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L187&gt;              * If the
<br>
user asked for a checkpoint enabled run
<br>
&nbsp;188
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L188&gt;              * then only
<br>
load checkpoint enabled components.
<br>
&nbsp;189
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L189&gt;              */
<br>
&nbsp;190
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L190&gt;             if(
<br>
MCA_BASE_METADATA_PARAM_CHECKPOINT
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=MCA_BASE">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=MCA_BASE</a>
<br>
_METADATA_PARAM_CHECKPOINT&gt;  &amp; open_only_flags
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=open_onl">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=open_onl</a>
<br>
y_flags&gt; ) {
<br>
&nbsp;191
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L191&gt;                 if(
<br>
MCA_BASE_METADATA_PARAM_CHECKPOINT
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=MCA_BASE">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=MCA_BASE</a>
<br>
_METADATA_PARAM_CHECKPOINT&gt;  &amp; dummy
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=dummy">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=dummy</a>&gt;
<br>
-&gt;data
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=data">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=data</a>&gt;
<br>
.param_field
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=param_fi">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=param_fi</a>
<br>
eld&gt; ) {
<br>
&nbsp;192
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L192&gt;
<br>
opal_output_verbose
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=opal_out">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=opal_out</a>
<br>
put_verbose&gt; (10, output_id
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=output_i">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=output_i</a>
<br>
d&gt; ,
<br>
&nbsp;193
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L193&gt;
<br>
&quot;mca: base: components_open: &quot;
<br>
&nbsp;194
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L194&gt;
<br>
&quot;(%s) Component %s is Checkpointable&quot;,
<br>
&nbsp;195
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L195&gt;
<br>
type_name
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=type_nam">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=type_nam</a>
<br>
e&gt; ,
<br>
&nbsp;196
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L196&gt;
<br>
dummy
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=dummy">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=dummy</a>&gt;
<br>
-&gt;version
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=version">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=version</a>&gt;
<br>
.mca_component_name
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=mca_comp">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=mca_comp</a>
<br>
onent_name&gt; );
<br>
&nbsp;197
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L197&gt;                 }
<br>
&nbsp;198
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L198&gt;                 else {
<br>
&nbsp;199
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L199&gt;
<br>
opal_output_verbose
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=opal_out">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=opal_out</a>
<br>
put_verbose&gt; (10, output_id
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=output_i">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=output_i</a>
<br>
d&gt; ,
<br>
&nbsp;200
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L200&gt;
<br>
&quot;mca: base: components_open: &quot;
<br>
&nbsp;201
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L201&gt;
<br>
&quot;(%s) Component %s is *NOT* Checkpointable - Disabled&quot;,
<br>
&nbsp;202
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L202&gt;
<br>
type_name
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=type_nam">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=type_nam</a>
<br>
e&gt; ,
<br>
&nbsp;203
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L203&gt;
<br>
dummy
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=dummy">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=dummy</a>&gt;
<br>
-&gt;version
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=version">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=version</a>&gt;
<br>
.mca_component_name
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=mca_comp">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=mca_comp</a>
<br>
onent_name&gt; );
<br>
&nbsp;204
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L204&gt;
<br>
opal_list_remove_item
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=opal_lis">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=opal_lis</a>
<br>
t_remove_item&gt; (&amp;components_found
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=componen">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=componen</a>
<br>
ts_found&gt; , item
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=item">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/+code=item</a>&gt; );
<br>
&nbsp;205
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L205&gt;                 }
<br>
&nbsp;206
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L206&gt;             }
<br>
&nbsp;207
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L207&gt;         }
<br>
&nbsp;208
<br>
&lt;<a href="http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/">http://support.systemfabricworks.com/lxr/ofed+OFED-1.4.1/openmpi-1.3.2/</a>
<br>
opal/mca/base/mca_base_components_open.c#L208&gt;     }
<br>
&nbsp;
<br>
Thanks
<br>
<p><p><p><p>Ananda
<br>
<p>&nbsp;
<br>
<p>Ananda B Mudar, PMP
<br>
<p>Senior Technical Architect
<br>
<p>Wipro Technologies
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8309/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8310.php">Joshua Hursey: "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>Previous message:</strong> <a href="8308.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>Maybe in reply to:</strong> <a href="8308.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8310.php">Joshua Hursey: "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
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
