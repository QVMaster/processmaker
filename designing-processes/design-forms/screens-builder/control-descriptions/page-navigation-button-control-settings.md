---
description: >-
  Add a Page Navigation button control from which the form user can go to
  another page in a multi-page ProcessMaker Screen.
---

# Page Navigation Button Control Settings

## Control Description <a id="control-description"></a>

The Page Navigation Button control adds a button from which the form user can go to another page in a multi-page ProcessMaker Screen. 

{% hint style="info" %}
This control is not available for [Display](../types-for-screens.md#display)-type ProcessMaker Screens. See [Screen Types](../types-for-screens.md).
{% endhint %}

## Add the Control to a ProcessMaker Screen <a id="add-the-control-to-a-processmaker-screen"></a>

{% hint style="info" %}
Your user account or group membership must have the following permissions to add a control to a ProcessMaker Screen:

* Screens: View Screens
* Screens: Edit Screens

See the ProcessMaker [Screens](../../../../processmaker-administration/permission-descriptions-for-users-and-groups.md#screens) permissions or ask your ProcessMaker Administrator for assistance.
{% endhint %}

Follow these steps to add this control to the ProcessMaker Screen:

1. [Create](../../create-a-new-form.md) or [open](../../manage-forms/view-all-forms.md) the ProcessMaker Screen. The ProcessMaker Screen is in [Editor mode](../screens-builder-modes.md#editor-mode).
2. View the ProcessMaker Screen page to which to add the control.
3. Go to the **Controls** panel on the left side of the ProcessMaker Screen.
4. Drag the **Page Navigation Button** icon![](../../../../.gitbook/assets/page-navigation-control-screens-builder-processes.png)from the **Controls** panel anywhere within the ProcessMaker Screen canvas represented by the dotted-lined box. Existing controls on the ProcessMaker Screen canvas adjust positioning based on where you drag the control.
5. Drop into the ProcessMaker Screen where you want the control to display on the page.  

   ![](../../../../.gitbook/assets/page-navigation-control-placed-screens-builder-processes.png)

Below is a Page Navigation Button control in Preview mode.

![Page Navigation Button control in Preview mode using the &quot;Secondary&quot; Variant option](../../../../.gitbook/assets/page-navigation-button-control-preview-screens-builder-processes.png)

## Inspector Settings <a id="inspector-settings"></a>

{% hint style="info" %}
### Don't Know What the Inspector Panel Is?

See [View the Inspector Panel](../view-the-inspector-pane.md).

### Permissions Required to View Control Settings

Your user account or group membership must have the following permissions to edit a ProcessMaker Screen control:

* Screens: View Screens
* Screens: Edit Screens

See the ProcessMaker [Screens](../../../../processmaker-administration/permission-descriptions-for-users-and-groups.md#screens) permissions or ask your ProcessMaker Administrator for assistance.
{% endhint %}

Below are Inspector settings for the Page Navigation Button control:

* **Field Label:** Specify the field label text that displays. **New** **Page Navigation** is the default value.
* **Variant:** Specify the style for the Page Navigation Button control. The style changes the control's appearance but otherwise has no functional difference. Select from the following options:
  * **Primary:** Blue-colored background with white-colored **Field Label** text. Set as the default.
  * **Secondary:** Gray-colored background with white-colored **Field Label** text.
  * **Success:** Green-colored background with white-colored **Field Label** text.
  * **Danger:** Red-colored background with white-colored **Field Label** text.
  * **Warning:** Yellow-colored background with black-colored **Field Label** text.
  * **Info:** Teal-colored background with white-colored **Field Label** text.
  * **Light:** White-colored background with black-colored **Field Label** text.
  * **Dark:** Black-colored background with white-colored **Field Label** text.
  * **Link:** White-colored background with blue-colored **Field Label** text.
* **Destination:** Select the destination page to which to navigate in a multi-page ProcessMaker Screen. The default is the first page of the ProcessMaker Screen.

## Related Topics <a id="related-topics"></a>

{% page-ref page="../types-for-screens.md" %}

{% page-ref page="../view-the-inspector-pane.md" %}

{% page-ref page="./" %}
